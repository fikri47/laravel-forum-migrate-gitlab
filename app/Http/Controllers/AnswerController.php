<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request, $id) {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $request->validate([
            'content' => 'required'
        ]);

        $idUser = Auth::id();

        $answer = new Answer();
        $answer->user_id = $idUser;
        $answer->content = $request->content;
        $answer->question_id = $id;

        $answer->save();

        return redirect('/question/'. $id);
    }

    public function update(Request $request, Answer $answer)
    {
        if (Auth::user()->id == $answer->user_id) {
            $answer->update($request->all());
        }

        return back()->withSuccess('Task Created Successfully!');
    }

    public function delete(Answer $answer) {
        if (Auth::user()->id == $answer->user_id) {
            $answer->delete();            
        }
        return back()->withSuccess('Task Created Successfully!');
    }
}
