<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

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
}
