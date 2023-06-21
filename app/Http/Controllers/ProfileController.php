<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index', 'update']);
    }

    public function index() {
        $idUser = Auth::id();

        $detailProfile = Profile::where('user_id', $idUser)->first();
        return view('', compact('detailProfile'));
    }

    public function update(Request $request, $id) {
        dd($request->all());
        $request->validate([            
            'age'=> 'required|numeric',
            'bio'=> 'required',
            'address'=> 'required',
            'avatar' => 'image|mimes:png,jpg'
        ]);

        $profile = Profile::find($id); 

        if($request->has('avatar')) {
        //   $path = 'image/';

          $filename = time(). '.' .$request->avatar->extension();
          $request->avatar->move(public_path('image'), $filename);

          $profile->avatar = $filename;
          $profile->save();
        }

        $profile -> age = $request->age;
        $profile -> bio = $request->bio;
        $profile -> address = $request->address;
        $profile->update();

        return back();
    }

    
}
