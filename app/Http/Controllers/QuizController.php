<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with('Answer')->get();
        return $questions;
    }
    public function Answer()
    {
        return $this->hasMany('App\Answer');
    }
}
