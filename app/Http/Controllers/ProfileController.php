<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $jenkel = ['Laki-laki', 'Perempuan'];
        $user = User::where('id', Auth::user()->id)->first();
        $check = Profile::where('user_id', Auth::id())->count() > 0;
        if($check) {
            $data = Profile::where('user_id', Auth::user()->id)->with('user')->first();
        } else {
            $photo = 'images/profile/default.jpg';
            session()->flash('error', 'User belum melengkapi data, Silahkan dilengkapi terlebih dahulu');
        }
        return view('profile.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $file = $request->file('photo');
        $name = time();
        $ext = $file->getClientOriginalExtension();
        $newName = $name . '.' . $ext;
        $path = $file->move('images/profile', $newName);

        $profile = new Profile;
        $profile->user_id = $request->id;
        $profile->jenkel = $request->jenkel;
        $profile->alamat = $request->alamat;
        $profile->photo = $newName;
        $profile->save();

        if ($profile) {
            return redirect()->route('profile.index');
        } else {
            return redirect()->back();
        }
    }
}
