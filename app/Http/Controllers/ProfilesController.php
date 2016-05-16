<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use App\Http\Requests as Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
use App\Profile;
use Request;


class ProfilesController extends Controller
{

    public function show($username){
        
    	try{
    		$user= User::with('profile')->whereName($username)->firstOrFail();
    	}
    	catch(ModelNotFoundException $e){
    		return redirect('/home');
    	}
        if(is_null($user->profile)){
            $user->profile()->save(new Profile());
            return view('profiles.edit', compact('user'));
        }
    	return view('profiles.show', compact('user'));
    }

    public function edit($username){
    	$user = User::whereName($username)->firstOrFail();

    	return view('profiles.edit', compact('user'));
    }

    public function update($username){
    	$user = User::whereName($username)->firstOrFail();
    	$input = Request::only('location', 'bio');
    	$user->profile->fill($input)->save();
    	return redirect('/' . $user->name);
    	
    }
}

