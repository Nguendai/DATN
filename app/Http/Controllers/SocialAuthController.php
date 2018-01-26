<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
<<<<<<< HEAD
use App\User;
use App\social;

=======
use Validator;
use Auth;
use Hash;
use App\User;
use App\social;
use DB;
>>>>>>> 5184ac11eb2457dc431c568af5e879f4598ae0a2

class SocialAuthController extends Controller
{
   /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
<<<<<<< HEAD
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
=======
   public function redirect()
   {
   	return Socialite::driver('facebook')->redirect();
   }
>>>>>>> 5184ac11eb2457dc431c568af5e879f4598ae0a2
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
<<<<<<< HEAD
       try {
			$socialUser = Socialite::driver( 'facebook' )->user();
		} catch ( \Exception $e ) {
			return redirect( '/' );
		}
		//check if we have logged provider
		$socialProvider = social::where( 'provider_id', $socialUser->getId() )->first();
		$name=$socialUser->getName();
		$email=$socialUser->getEmail();
		$avatar=$socialUser->getAvatar();
		
		if ( ! $socialProvider ) {
			//create a new user and provider
			$user = new User();
			$user->name=$name;
			$user->email=$email;
			$user->password='';
			$user->phone='';
			$user->address='';
			$user->images=$avatar;
			$user->save();
			$user->social()->create(
				[ 'provider_id' => $socialUser->getId(), 'provider' => 'facebook' ]
			);
			
		} else {
			$user = $socialProvider->user;
		}
		
		auth()->login( $user );
		
		return redirect( '/' );
=======
    	try {
    		$socialUser = Socialite::driver( 'facebook' )->user();

    	} catch ( \Exception $e ) {
    		return redirect( '/' );
    	}
		//check if we have logged provider
    	$socialProvider = social::where( 'provider_id', $socialUser->getId() )->first();
    	$name=$socialUser->getName();
    	$email=$socialUser->getEmail();
    	$avatar=$socialUser->getAvatar();
        if($email == null){
            $email = "NULL";
        }
    	if ( ! $socialProvider ) {
			//create a new user and provider
    		$user = new User();
    		$user->name=$name;

    		$user->email=$email;
    		$user->password='';
    		$user->phone='';
    		$user->address='';
    		$user->images=$avatar;
    		$user->save();
    		$user->social()->create(
    			[ 'provider_id' => $socialUser->getId(), 'provider' => 'facebook' ]
    		);

    	}else {
    		$user = $socialProvider->user;
    	}
    	auth()->login($user );

    	return redirect( '/' );
    }
    public function redirectToProviderGoogle()
    {
    	return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackGoogle() {
    	try {
    		$socialUser = Socialite::driver( 'google' )->user();
    	} catch ( \Exception $e ) {
    		return  redirect( '/' );

    	}
		//check if we have logged provider
    	$socialProvider = social::where( 'provider_id', $socialUser->getId() )->first();
    	$name=$socialUser->getName();
    	$email=$socialUser->getEmail();
    	$avatar=$socialUser->getAvatar();
    	$check_user = DB::table('users')->where('email',$email)->first();
    	if ( ! $socialProvider ) {
			//create a new user and provider
    		$user = new User();
    		$user->name=$name;
    		$user->email=$email;
    		$user->password='';
    		$user->phone='';
    		$user->address='';
    		$user->images=$avatar;
    		$user->save();
    		$user->social()->create(
    			[ 'provider_id' => $socialUser->getId(), 'provider' => 'google' ]
    		);

        }else{
    		$user = $socialProvider->user;
    	}
    	auth()->login( $user );

    	return redirect( '/' );
>>>>>>> 5184ac11eb2457dc431c568af5e879f4598ae0a2
    }
}
