<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //session(['name'=>'ali','email'=>'ali@local.com','url'=>'local.com']);
        // return session()->all();
        //  return session()->get('name ');

            //  return session()->all();
           //   return session('email');
          //    return $request->session()->all();

;
              $request->session()->flash('msg',"hello world !");
            //   $request->session()->flash('msg2',"hello world222 !");
            //   $request->session()->flash('msg3',"hello world333 !");

              if($request->session()->has('msg')){
              //  var_dump(session()->get('msg'));
               $request->session()->reflash();
               //$request->session()->keep('msg');
                return session()->all();
              }
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
