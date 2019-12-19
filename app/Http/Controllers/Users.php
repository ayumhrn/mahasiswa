<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

class Users extends Controller
{
    //
    function All() {

        $data = user::all();

        return view('datauser', ['data'=>$data]);

    }

    function addUser(Request $data) {

        $cmp = new user;

        $cmp->name_user = $data->name_user;
        $cmp->gender = $data->gender;

        echo $cmp->save();
    }

    function updateUser(Request $data) {

        $cmp = user::find($data->id);

        $cmp->name_user = $data->name_user;
        $cmp->gender = $data->gender;

        echo $cmp->save();
    }

    function deleteUser(Request $data) {

        $cmp = user::find($data->id);

        echo $cmp->delete();
    }
}
