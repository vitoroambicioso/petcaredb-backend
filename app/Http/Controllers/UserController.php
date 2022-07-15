<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller {

    public function create(Request $request)
    {
        
        if(!empty($request->all())){
            $user = new User;
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();
            $json = json_encode($request->all());
            return response()->json($json, 200);
            echo "<pre>";
            print_r($json);
            echo "</pre>";
        }else{
            dd('nao foi possivel cadastrar');
        }

    }
    public function createPage()
    {
        return view('create-page');
    }
    public function loginPage()
    {
        return view('login-page');
    }
    public function loginGooglePage() 
    {
        return view('login-google');
    }
    
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $json = json_encode($request->all());
            echo "<pre>";
            print_r($json);
            echo "</pre>";
        }else {
            dd('nao logou');
        }
    }

    public function updatePage()
    {
        return view('update-page');
    }

}
