<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comments;
use App\User;
class CommentsController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
        public function index()
        {

         $comments=Comments::all();
         //$Users=User::all();

      $comments=Comments::jadid();
     //  dd($Users[0]->comments[0]->commenttext);die;
      $comments=Comments::orderby('id','desc')->get();
  //     $comments=Comments::orderby('id','asc')->get();
        return view('comments.comments',compact(['comments']));


        //session(['name'=>'ali','email'=>'ali@local.com','url'=>'local.com']);
        // return session()->all();
        //  return session()->get('name ');

            //  return session()->all();
           //   return session('email');
          //    return $request->session()->all();


            //  $request->session()->flash('msg',"hello world !");
            //   $request->session()->flash('msg2',"hello world222 !");
            //   $request->session()->flash('msg3',"hello world333 !");

           //   if($request->session()->has('msg')){
              //  var_dump(session()->get('msg'));
            //   $request->session()->reflash();
               //$request->session()->keep('msg');
              // return session()->all();
            //  }
            // return session()->all();


       //     $request->session()->keep('msg');
            //    return  $request->session()->get('msg');
               //   return session()->all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comments.createcomments");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Newcomment=$request->post('commenttext');
       // $user=$request->post('userid');
       // mohem
          $fileimage= $request->file('pathimagefile');
    //  echo "<br>";
    //  echo     $fileimage->getClientOriginalName();
    //  echo "<br>";
    //   echo       $fileimage->getClientMimeType();
    //   echo "<br>";
    //   echo       $fileimage->getClientSize();die;
      $userid= $request->user()->id;
      $user=User::findOrFail($userid);

      if($fileimage){
         $imagename=  $fileimage->getClientOriginalName();
         $fileimage->move('images/posts',$imagename);
         $comment=new Comments(['commenttext'=>$Newcomment,'fileimage'=> $imagename]);
      }else{
        $comment=new Comments(['commenttext'=>$Newcomment]);
    }

        if($user->comments()->save($comment)){
            $request->session()->flash('msg',"your comment create successfully");
        }else{
            $request->session()->flash('msg',"your comment NOT create successfully");
        }
        $comments=Comments::all();
        return view('comments.comments',compact(['comments']));


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
