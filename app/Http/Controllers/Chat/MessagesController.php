<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Messages;
use App\Listeners\ChatEvent;

class MessagesController extends Controller
{
    public function index($id){
      $group = DB::table('group_messages')->where('id_user',$id)->first();
      $message = DB::table('messages')->where('id_group',$group->id)->get();
      return  view('chat',compact('message'));
    }
    public function admin($id){
        $group = DB::table('group_messages')->where('id_user',$id)->first();
        $message = DB::table('messages')->where('id_group',$group->id)->get();

        return  view('admin',compact('message'));
    }
    public function postSend(Request $req,$id){
        $user = DB::table('users')->where('id',$id)->first();
        $check = DB::table('group_messages')->where('user_id',$id)->first();
        if(!$check){
            DB::table('group_messages')->insert([
                'user_id' => $id,
                'user_id_to' => 1,
             ]);
        }
        $group = DB::table('group_messages')->where('user_id',$id)->first();
    	$message = Messages::create([
            'group_id' =>$group->id,
            'author' => $user->name,
            'content' => $req->content,
        ]);
    	event(
    		$e  = new ChatEvent($message)
    	);
    	return response()->json($message);
    }
    public function adminPostSend(Request $req,$id){
        $group = DB::table('group_messages')->where('user_id',$id)->first();
        $message = Messages::create([
            'group_id' =>$group->id,
            'author' => 'Admin',
            'content' => $req->content,
        ]);
        event(
            $e  = new RedisEvent($message)
        );
        return  redirect()->back();
    }
}
