<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\COMMENT;
use Session;

class Con_comment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comment= COMMENT::all();

        return response()->json([
            "mensaje" => $comment,
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
        if(Session::has('id')){
        $comment= new COMMENT;
            $comment->text = $request->get('text');
            $comment->id_posts = $request->get('idPOST');
            $comment->id_users = Session::get('id');
            $comment->save();

            return response()->json([
                "mensaje" => $comment,
                "status" => "success"
            ]);
        }

        else{
            return response()->json([
                "mensaje" => 'ERROR 400 IDIOT',
                "status" => "error"
            ]);

        }
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
