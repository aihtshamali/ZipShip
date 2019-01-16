<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Chat;
use App\User;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        Chat::create($request->all());
        // print_r($request->all()->json());
        // return redirect('/');
      // dd(Auth::id());
        // $chat=new Chat();
        // $chat->sender_id=Auth::id();
        // $chat->reciever_id=$request->id;
        // $chat->text=$request->message;
        // echo $chat->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $chats=Chat::where('reciever_id',Auth::id())->orWhere('sender_id',Auth::id())->get();
      $userchat=Chat::where('reciever_id',Auth::id())->where('sender_id',$id)
      ->orWhere('sender_id',Auth::id())
      ->where('reciever_id',$id)->get();
      $user=User::find($id);
      // dd($user);
      // $userchat=null;
      return view('chats.index',['chats'=>$chats,'userchat'=>$userchat,'id'=>$id,'user'=>$user]);  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
