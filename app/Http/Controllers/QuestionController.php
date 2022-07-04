<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $question = Question::all();
        return  view('admin.question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $question = new Question();
        $question->q = $request->q;
        $question->a1 = $request->a1;
        $question->a2 = $request->a2;
        $question->a3 = $request->a3;
        $question->a4 = $request->a4;
        $question->save();
        $notification = array(
            'messege' => 'Annonce de réponse à la question réussie!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return  view('admin.question.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $question = Question::find($id);
        return  view('admin.question.edit',compact('question'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->q = $request->q;
        $question->a1 = $request->a1;
        $question->a2 = $request->a2;
        $question->a3 = $request->a3;
        $question->a4 = $request->a4;
        $question->save();
        $notification = array(
            'messege' => 'Annonce de réponse à la question réussie!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        $notification = array(
            'messege' => 'Supprimer avec succès!',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }
}
