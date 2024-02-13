<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('questions');
    }

    public function telegram_index(){
        return view('questions');
    }

    public function index_with_answer(){
        $questions = Question::all();
        return view('admin/question', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'question' => 'required',
            ]
        );

        $question_model = new \App\Models\Question();
        $question_model->question =  $data['question'];
        $question_model->save();

        session()->flash('question-add', 'Pyetja u regjistrua me sukses!');

        return redirect('/pyetje');
    }

    public function store_with_answer(Request $request)
    {
        $data = request()->validate(
            [
                'question' => 'required',
                'answer' => 'required',
                'tags' => '',
                'status' => 'required'
            ]
        );

        $question_model = new \App\Models\Question();
        $question_model->question =  $data['question'];
        $question_model->answer =  $data['answer'];
        $question_model->tags =  $data['tags'];
        $question_model->status =  $data['status'];
        $question_model->save();

        session()->flash('question-add', 'Pyetja u regjistrua me sukses!');

        return redirect()->back();

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $questions = Question::where('status',0)->get();
        return view('questions_show', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $questions = Question::all();
        return view('admin/question', compact('questions', 'question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->status = 1;
        $question->update();
        return redirect()->back();
    }


    public function update_with_answer(Request $request, Question $question)
    {

        $data = request()->validate(
            [
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required',
                'tags' => '',
            ]
        );

        $question->question =  $data['question'];
        $question->answer =  $data['answer'];
        $question->status =  $data['status'];
        $question->tags =  $data['tags'];
        $question->update();


        session()->flash('question-add', 'Pyetja u regjistrua me sukses!');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->back();
    }
}
