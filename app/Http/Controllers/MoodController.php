<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function showQuestions()
    {
        $questions = include app_path('Data/questions.php');

        return view('qpage', compact('questions'));
    }

    public function submitAnswers(Request $request)
    {
        $answers = $request->except('_token');

        // ممكن تستخدم القيم هنا لتحديد اقتراحات طعام بناءً على التحليل
        // مثال بسيط:
        // if answer_0 == "Tired" && answer_2 == "Low energy" => suggest "Smoothie" or "Fruit Bowl"

        return view('resultpage', compact('answers'));
    }
}
