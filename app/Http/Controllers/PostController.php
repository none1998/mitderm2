<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Http\Requests\SavePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function admin(){
        $questions = Question::with('Answer')->get();
        return view('admin')->with('questions', $questions);
    }

    public function student(){
        $questions = Question::all();
        return view('student')->with('questions', $questions);
    }

    public function create(){
        $answers = Answer::all();
        return view('create', compact('answers'));
    }

    public function save(SavePostRequest $request){
        $question = new Question($request->all());
        $question->user_id = 1;
        $question->save();
        $question->tags()->attach($request->answers);
        return redirect()->back();
    }
}
