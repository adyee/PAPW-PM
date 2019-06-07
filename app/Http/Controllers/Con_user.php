<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\USER;
use App\FOLLOW;

class Con_user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
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
        $ditto=User::where('email','=',$request->get('email'))->first();
        if($ditto != NULL){
                    return response()->json([
                        "mensaje" => 'There is already an account with this e-mail',
                        "status" => "error"
            ]);
        }

        else{

            $user = new User;
            $user->email = $request->get('email');
            $user->name = $request->get('name');
            $user->password = $request->get('password');
            $user->save();

            Session::put('id', $user->id);
            Session::put('email', $user->email);
            Session::put('password', $user->password);
            Session::put('name', $user->name);
            Session::put('career', $user->career);
            Session::put('banner', $user->banner);
            Session::put('profile_photo' , 'assets\prof_pic.jpg');
            Session::put('admin', $user->admin);

            return response()->json([
                "mensaje" => 'registrao',
                "status" => "success"
            ]);
        }
        

        
        return response()->json([
            "mensaje" => 'YA SE ROMPIOOOO! :,c',
            "status" => "error"
        ]);
    }


    public function logout(){

        Session::flush();

        return redirect()->route('main.page');
    }

    public function login(Request $request){

        $mimikiu=User::where('email','=',$request->get('email'))->first();
        if($mimikiu != NULL){

            Session::put('id', $mimikiu->id_users);
            Session::put('email', $mimikiu->email);
            Session::put('password', $mimikiu->password);
            Session::put('name', $mimikiu->name);
            Session::put('career', $mimikiu->career);
            Session::put('banner', $mimikiu->banner);
            Session::put('profile_photo', $mimikiu->profile_photo);
            Session::put('admin', $mimikiu->admin);
            

            return response()->json([
                "mensaje" => 'x',
                "status" => "success"
            ]);
                
                }

        else{

            return response()->json([
                "mensaje" => 'No existe tu cuenta men/woman',
                "status" => "error"
    ]);
        }

    }


    public function follow(Request $request){

        $followdata = new FOLLOW;
        $followdata->id_following =  Session::get('id');
        $followdata->id_followed = $request->get('id');
        $followdata->save();
    
        return response()->json([
            "mensaje" => 'FOLLOW EXITOSO',
            "status" => "success"
        ]);


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
    public function update(Request $request)
    {
        $result = $request->get('prof_name');

        if($result != "")
        {
            User::where('id_users', "=", Session::get('id'))->update(['name'=>$result]);
        }

        $result = $request->get('prof_career');

        if($result != "")
        {
            User::where('id_users', "=", Session::get('id'))->update(['career'=>$result]);
        }

        $result = $request->get('prof_passw');

        if($result != "")
        {
            User::where('id_users', "=", Session::get('id'))->update(['password'=>$result]);
        }

        $obj['name'] = $request->get('name');
        $obj['career'] = $request->get('career');
        $obj['password'] = $request->get('password');

        return response()->json([
            "mensaje" => 'Actualization',
            "status" => "success",
            "data" => $obj
        ]);
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

    public function search(Request $request){

        $palabra = $request->get('text');

        return view('search');

    }

    public function alike_bring(Request $request){

        $looklike = User::where('name', 'like', '%' . $palabra . '%')->get();


    }

}
