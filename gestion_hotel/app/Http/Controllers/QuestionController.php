<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class  QuestionController extends Controller
{
    
    public function index(){
    $collection=Question::all();
        return view('questions.index',compact('collection'));
    }
 
    public function show($id){
        $model=Question::find($id);
        return view('questions.show',compact('model'));
    }
    public function create(){
        return view('questions.create');
    }
    public function store(Request $request){
        // dd($request);
        $val=$request->validate([
            'question'=>'required|max:150',
        ]);
        $val['user']=1;
        Question::create($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('questions.index'));
    }
    public function update(Request $request,$id){
        // dd($request);
        $val=$request->validate([
            'question'=>'required|max:150',
        ]);
        $model=Question::findOrFail($id);

        $model->update($val);
        session()->flash('message',1);
        session()->flash('type',1);
        return redirect(route('questions.index'));
    }
    public function delete($id){
        $model=Question::findOrFail($id)->delete();
        return redirect(route('questions.index'));
    }
}
