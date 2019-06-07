<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use Illuminate\Support\Facades\Redirect;
use View;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Comment;
use App\POST;

class Con_post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $post= POST::all();

        return response()->json([
            "mensaje" => $post,
            "status" => "success"
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $id = Auth::user()->getId();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile('myFile')){

            $file = $request->file('myFile');
            $name = $file->getClientOriginalName() . '_' . Session::get('id') . '.' . $file->getClientOriginalExtension();
            
            $file->move(public_path(). '/' . 'imagenes/', $name);
            $path = "imagenes/" . $name;
        



            $post= new POST;
            $post->title = $request->get('title');
            $post->description = $request->get('descripcion');
            $post->imagePath = $path;
            $post->id_users = Session::get('id');
            $post->save();

            return response()->json([
                "mensaje" => $post,
                "status" => "success"
            ]);

        }

        else{

            return response()->json([
                "mensaje" => 'NO SE TE HACE SER POPULAR',
                "status" => "success"
            ]);
        }



        /*return response()->json([
            "mensaje" => 'No se hace compa',
            "status" => "error"
        ]);

        $id = Auth::user()->getId();
        //$user->id;
        $path = "";
        if($request->hasfile('getfile'))
        {
           $file = $request->file('getfile');
           $path = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $path);
        }
       
        $post= new \App\POST;
        $post->title = $request->get('title_input');
        $post->description = $request->get('desc_input');
        $post->id_users = $user->id;
        $post->imagePath = $path;
        $post->save();
        //$publications->users()->attach($user->id);
        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('DASH'); */
   
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
