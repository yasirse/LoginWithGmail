<?php
namespace App\Http\Controllers;  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\view;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
            
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
                
      
                //return redirect()->intended('dashboard');
                return redirect()->intended('welcome');//added by yasir
       
            }else{
                return view('hina');
                echo "inserting user detail";
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function logout()
    {
        //Checking user is login in
        $user = Auth::user();
        if (Auth::check())
        {
            Auth::logout();
            //return redirect()->intended('yasir');//added by yasir
            return view('yasir');
        }
        else
        {
            return view('hina');

        }
        
    }
}
