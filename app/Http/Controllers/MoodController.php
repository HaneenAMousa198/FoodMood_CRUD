<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\MoodResult;


class MoodController extends Controller
{
    public function showQuestions()
    {
        $questions = include app_path('Data/questions.php');

        return view('qpage', compact('questions'));
        
    }

    public function submitAnswers(Request $request)
    {
       
        $answers = [];
        for ($i = 0; $i < 8; $i++) {
            $answers[] = $request->input("answer_$i");
        }
        
        $moodAnalysis = $this->analyzeMood($answers);
        $recipes = $this->getSuggestedRecipes($moodAnalysis);

         // save in database
        MoodResult::create([
            'answers' => json_encode($answers),
            'analysis' => $moodAnalysis['analysis'],
            'dominant_moods' => json_encode($moodAnalysis['dominant_moods']),
        ]);

        return view('resultpage', [
            'mood' => $moodAnalysis,
            'recipes' => $recipes
        ]);
    }
    private function analyzeMood(array $answers)
    {
        $prompt = "You are a mood analysis assistant. Based on the user's answers below, please:\n";
        $prompt .= "1. Provide a detailed mood analysis in 3-4 sentences.\n";
        $prompt .= "2. Identify the top 2 dominant moods from these: Happy, Stressed, Energetic, Tired, Sad, Relaxed, Adventurous, Nostalgic.\n";
        $prompt .= "3. For each dominant mood, provide a confidence score from 0 to 100.\n";
        $prompt .= "4. Mention any notable emotional nuances or mixed feelings observed.\n\n";
        $prompt .= "User's answers:\n";
        
        
        foreach ($answers as $index => $answer) {
            $prompt .= "Question {$index}: {$answer}\n";
        }
        
        try {
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
                ])->post('https://api.openai.com/v1/chat/completions', [
                 'model' => 'gpt-4',// 
                 'messages' => [
                ['role' => 'user', 'content' => $prompt]
            ],
            'temperature' => 0.7,
            ]);
        
           $analysis = $response->json()['choices'][0]['message']['content'];
        
           // نحاول نستخرج المزاجين مع الدرجات بشكل تلقائي
           preg_match_all('/(Happy|Stressed|Energetic|Tired|Sad|Relaxed|Adventurous|Nostalgic)\s*:\s*(\d{1,3})/i', $analysis, $matches, PREG_SET_ORDER);
            // error
           $dominantMoods = [];
           foreach ($matches as $match) {
            $dominantMoods[] = [
                'mood' => $match[1],
                'confidence' => (int)$match[2],];
            }

            // لو ما تم استخراج المزاج بشكل واضح، نعطي حالة محايدة
            if (empty($dominantMoods)) {
                foreach (['Happy', 'Stressed', 'Energetic', 'Tired', 'Sad', 'Relaxed', 'Adventurous', 'Nostalgic'] as $mood) {

                    if (stripos($analysis, $mood) !== false) {
                        $dominantMoods[] = ['mood' => $mood, 'confidence' => 80];
                        break;
                    }
                }
            }
            return [
                'analysis' => $analysis,
                'dominant_moods' => $dominantMoods ?: [['mood' => 'Neutral', 'confidence' => 100]],
            ];


        } 
    
        catch (\Exception $e) {
            return [
                'analysis' => 'Unable to analyze mood at this time.',
                'dominant_moods' => [['mood' => 'Neutral', 'confidence' => 100]]
            ];
        }
    }

    
   private function getSuggestedRecipes(array $moodAnalysis)
{
    $dominantMood = $moodAnalysis['dominant_moods'][0]['mood'] ?? 'Neutral';
    
    $prompt = "Suggest 3 food recipes suitable for someone who is feeling {$dominantMood}. 
    For each recipe, provide:
    - Recipe name
    - 5-6 main ingredients
    - Brief preparation method (2-3 sentences)
    - Serving suggestion
    
    Format the response as a JSON object with recipes array containing these fields: name, ingredients, method, serving_suggestion.";

    try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
            'Content-Type' => 'application/json'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4o',
            'messages' => [
                ['role' => 'user', 'content' => $prompt]
            ],
            'temperature' => 0.7
        ]);

        $content = $response->json()['choices'][0]['message']['content'] ?? '{}';
        $recipes = json_decode($content, true);

        return $recipes['recipes'] ?? [];

    } catch (\Exception $e) {
        \Log::error('Failed to fetch recipes: '.$e->getMessage());
        return [];
    }
}

}