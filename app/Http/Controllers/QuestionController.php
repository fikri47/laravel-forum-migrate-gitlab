<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct() {
        $this->middleware('auth')->except(['getAll']);
     }

    public function getAll() {
        $question = Question::orderBy('created_at', 'DESC')->get();
        return view('home.index', compact('question'));
    }

    public function index()
    {
        $user = Auth::id();
        $question = Question::where('user_id', $user)->get();
        return view('', ['question'=>$question]);        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category'=> 'required|exists:categories,id',
            'image' => 'image|mimes:png,jpg'
        ]);

        $user = Auth::id();

        $filename = time(). '.' .$request->image->extension();
        $request->image->move(public_path('image'), $filename);

        $question = new Question();
        $question -> title = $request->title;
        $question -> content = $request->content;
        $question -> user_id = $user;
        $question -> image = $filename;
        $question -> category_id = $request->category;
        $question->save();        

        return redirect('/question');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return view('', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $category = Category::get();
        return view('', ['question'=>$question, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category'=> 'required|exists:categories,id',
            'image' => 'image|mimes:png,jpg'
        ]);

        $question = Question::find($id);        

        if($request->hasFile('image')) {
            $path = 'image/';
            File::delete($path. $question->image);
  
            $filename = time(). '.' .$request->image->extension();
            $request->image->move(public_path('image'), $filename);
  
            $question->image = $filename;
            $question->update();
        }
        
          $question -> title = $request->title;
          $question -> content = $request->content;                    
          $question -> category_id = $request->category;
          $question->update();

          return redirect('question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();

        return redirect('question');
    }
}
