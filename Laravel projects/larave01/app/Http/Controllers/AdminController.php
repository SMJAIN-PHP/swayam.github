<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function admin_auth_login(Request $request)
    {
       $data = customer::where('email',$request->email)->first();
       if($data)
        {
        if(Hash::check($request->password,$data->password))
            {
           if ($data->status == "Unblock") {
                    echo "<script>
                    alert('Login success');
                    window.location='/';
                    </script>";
                } else {
                    echo "<script>
                    alert('Login Failed due to Blocked Account');
                    window.location='/web_login';
                    </script>";
                }
            }
                else {
                echo "<script>
                    alert('Login Failed due to wrong password');
                    window.location='/web_login';
                    </script>";
            }
        } else {
            echo "<script>
                    alert('Login Failed due wrong email');
                    window.location='/web_login';
                    </script>";
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
