<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function showQuestions()
    {
        $questions = [
            [
                'question' => 'How are you feeling today?',
                'answers' => ['Happy', 'Sad', 'Stressed', 'Relaxed', 'Angry', 'Excited'],
            ],
            [
                'question' => 'How was your sleep last night?',
                'answers' => ['Happy', 'Sad', 'Stressed', 'Relaxed', 'Angry', 'Excited'],
            ],
            [
                'question' => 'How do you feel about your work/study?',
                'answers' => ['Happy', 'Sad', 'Stressed', 'Relaxed', 'Angry', 'Excited'],
            ],
            [
                'question' => 'How do you feel about your relationships?',
                'answers' => ['Happy', 'Sad', 'Stressed', 'Relaxed', 'Angry', 'Excited'],
            ],
            [
                'question' => 'How is your general energy today?',
                'answers' => ['Happy', 'Sad', 'Stressed', 'Relaxed', 'Angry', 'Excited'],
            ],
        ];

        return view('qpage', compact('questions'));
    }


     public function submitAnswers(Request $request)
    {
        // نحصل على كل الإجابات المدخلة
        $answers = $request->except('_token'); // إزالة التوكن

        // هنا ممكن تعملي معالجة على النتائج حسب الحاجة
        // مثلاً حساب عدد كل شعور أو أي منطق تريدينه

        return view('resultpage', compact('answers'));
    }
}
