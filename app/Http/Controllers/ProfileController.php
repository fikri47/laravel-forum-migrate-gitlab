<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index', 'update']);
    }

    public function index() {
        $idUser = Auth::id();
        

        $detailProfile = Profile::where('user_id', $idUser)->first();
        return view('', ['detailProfile' => $detailProfile]);
    }

    public function update(Request $request, $id) {           
        $request->validate([            
            'age'=> 'required|numeric',
            'bio'=> 'required',
            'address'=> 'required',
            'avatar' => 'image|mimes:png,jpg'
        ]);

        $profile = Profile::find($id);
        
        if($request->hasFile('avatar')) {
              $path = 'image/';
              File::delete($path. $profile->avatar);
    
              $filename = time(). '.' .$request->avatar->extension();
              $request->avatar->move(public_path('image'), $filename);
    
              $profile->avatar = $filename;
              $profile->save();
            }
               
        $profile -> age = $request->age;
        $profile -> bio = $request->bio;
        $profile -> address = $request->address;
        $profile->update();                

        return redirect('profile');

    }

    
}
