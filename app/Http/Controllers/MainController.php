<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Main;
class MainController extends Controller
{
    public function login(Request $a)
    {
        //print_r($a->all());
        $user = User::where('email',$a->user_email)->first();
        // dd($user);
        if(User::where('email',$a->user_email)->where('password',$a->password))
            {
                if($user->label == '0')
                {
                    return redirect('checker/index');
                }
                elseif ($user->label == '1')
                {
                    return redirect('validator/index');
                }
                elseif ($user->label == '2')
                {
                    return redirect('admin/index');
                }
                elseif ($user->label == '3')
                {
                    return redirect('super_admin/index');
                }
     
        else
        {
            return redirect (route('login'));
        } 
}
    
}
public function admin()
    {
        return view('admin.index');
    }
    public function checker()
    {
        return view('checker.index');
    }
    public function super_admin()
    {
        return view('super_admin.index');
    }
    public function validator()
    {
        return view('validator.index');
    }

}
