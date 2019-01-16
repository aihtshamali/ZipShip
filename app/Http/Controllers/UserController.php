<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Storage;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        return view('profile.index',['user'=>$user]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Auth::user();
        return view("profile.edit",['user'=>$user]);
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
        $user=User::findOrFail($id);
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        if($request->hasFile('dp')){
          if(Storage::disk('public')->exists('/userprofile/'.$user->dp) && $user->dp) {
            Storage::disk('public')->delete('/userprofile/'.$user->dp);
          }
          $request->dp->store('uploads/userprofile');
          $user->dp = $request->dp->hashName();
        }
        $user->save();
        Session::flash('message', 'Inserted Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('profile.index');
    }
    public function updatePassword(Request $request){

          // return Validator::make($data, [
          //     'firstname' => 'required|string|max:255',
          //     'lastname' => 'required|string|max:255',
          //     'address' => 'required|string|max:255',
          //     // 'phone' => 'required|integer|max:255',
          //     'email' => 'required|string|email|max:255|unique:users',
          //     'password' => 'required|string|min:6|confirmed',
          // ]);
      
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
