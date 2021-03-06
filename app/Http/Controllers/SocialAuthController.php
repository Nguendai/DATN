<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\social;


class SocialAuthController extends Controller
{
   /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
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
    }
}
