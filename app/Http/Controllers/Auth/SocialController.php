<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Validator;
use Auth;
use Hash;
use App\User;
use App\social;


class SocialController extends Controller
{
	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();
	}
	
	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
//	public function handleProviderCallback()
//	{
//		$user = Socialite::driver('google')->user();
//		dd($user);
//		// $user->token;
//	}
	
	public function handleProviderCallback() {
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
	public function redirectToProviderGoogle()
	{
		return Socialite::driver('google')->redirect();
	}
	public function handleProviderCallbackGoogle() {
		try {
			$socialUser = Socialite::driver( 'google' )->user();
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
				[ 'provider_id' => $socialUser->getId(), 'provider' => 'google' ]
			);
			
		} else {
			$user = $socialProvider->user;
		}
		
		auth()->login( $user );
		
		return redirect( '/' );
	}
}
