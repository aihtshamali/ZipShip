<?php

namespace App\Http\Controllers;
// use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Post;
use App\Bid;
use Auth;
use Session;
use Storage;
use DB;
class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Poststatus($status){
      return view('posts.index',['orders'=>$order,'status'=>$status]);

    }
    public function index(Request $request)
    {
      $order=null;$status=null;
      // if($request->status=='intransite'){
      //     $order=Post::where('user_id',Auth::user()->id)->where('status','intransite')
      //       ->get();
      //       $status='intransite';
      // }elseif($request->status=="received"){
      //   $order=Post::where('user_id',Auth::user()->id)->where('status','received')
      //     ->get();
      //     $status='received';
      // }else{
        $status='requested';
        $order=Post::all();
        // ->get();
      // }
      // dd($order);
        return view('posts.index',['orders'=>$order,'status'=>$status]);

        // return view('posts.index',['orders'=>$order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


// File URL
// $url = "http://www.google.co.in/intl/en_com/images/srpr/logo1w.png";
// $contents = file_get_contents($url);
// // dd(new File('../postImages/').'fds');
// $name = substr($url, strrpos($url, '/') + 1);
// dd(Storage::disk('postimages')->put($name, $contents));
// dd($request->product_image->getClientOriginal

    public function store(Request $request)
    {
        $post=new Post();
        $img[]=null;
        if($request->hasFile('product_image')){
          // Image::make('http://f2b9x.s87.it/images/1/FR_laura-kithorizontal.gif')->save(public_path('images/saveAsImageName.jpg'));
          // dd($contents);
          // dd('fds');
          $temp=0;
          foreach ($request->file('product_image') as $image) {
            $image->store('uploads/postImages');
            $file_name = $image->hashName();
            $img[$temp]=$file_name;
            $temp++;
          }
          if(isset($img[0]))
            $post->image_1=$img[0];
          if(isset($img[1]))
            $post->image_2=$img[1];
          if(isset($img[2]))
            $post->image_3=$img[2];
        }
        // dd($img);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->traveler_reward=$request->reward;
        $post->from_loc=$request->from_loc;
        $post->to_loc=$request->to_loc;
        $post->to_city=$request->to_city;
        $post->to_country=$request->to_country;
        $post->from_country=$request->from_country;
        $post->from_city=$request->from_city;
        $post->user()->associate(Auth::user());
        $post->item_url=$request->item_url;
        $post->item_price=$request->item_price;
        $post->quantity=$request->quantity;
        $post->deliver_before=$request->Deliver_before;
        $post->comment=$request->comment;
        $post->save();
        Session::flash('message', 'Inserted Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('post.index');

        // dd($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Post::findOrFail($id);
        $bidsReceived = DB::select(DB::raw("SELECT bids.*,
        (SELECT COUNT(bids.id)
            FROM bids
            WHERE bids.post_id = $id) AS bids_count
            FROM bids
        "));

        return view('posts.show',['order'=>$order,'bidsReceived'=>$bidsReceived]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Post::findOrFail($id);
        return view('posts.edit',['order'=>$order]);
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
      $post=Post::find($id);
      $img[]=null;
      if($request->hasFile('product_image')){
        $temp=0;
        foreach ($request->file('product_image') as $image) {
          $image->store('uploads/postImages');
          $file_name = $image->hashName();
          $img[$temp]=$file_name;
          $temp++;
        }
        if(isset($img[0])){
          if(Storage::disk('postimages')->exists($post->image_1)) {
            Storage::disk('postimages')->delete($post->image_1);
          }
          $post->image_1=$img[0];
        }
        if(isset($img[1])){
          if(Storage::disk('postimages')->exists($post->image_2)) {
            Storage::disk('postimages')->delete($post->image_2);
          }
          $post->image_2=$img[1];
        }
        if(isset($img[2])){
          if(Storage::disk('postimages')->exists($post->image_3)) {
            Storage::disk('postimages')->delete($post->image_3);
          }
          $post->image_3=$img[2];
        }
      }
      $post->title=$request->title;
      $post->description=$request->description;
      $post->traveler_reward=$request->reward;
      $post->from_loc=$request->from_loc;
      $post->to_loc=$request->to_loc;
      $post->to_city=$request->to_city;
      $post->to_country=$request->to_country;
      $post->from_country=$request->from_country;
      $post->from_city=$request->from_city;
      $post->user()->associate(Auth::user());
      $post->item_url=$request->item_url;
      $post->item_price=$request->item_price;
      $post->quantity=$request->quantity;
      $post->deliver_before=$request->Deliver_before;
      $post->comment=$request->comment;
      $post->save();
      Session::flash('message', 'Updated Successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('post.index');
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
