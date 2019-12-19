<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\company;

class Cmp extends Controller
{
    //

    function All() {

        $data = company::all();

        return view('datacompany', ['data'=>$data]);

    }

    function addCompany(Request $data) {

        $cmp = new company;

        $cmp->name_company = $data->name_company;
        $cmp->address = $data->address;

        echo $cmp->save();
    }

    function updateCompany(Request $data) {

        $cmp = company::find($data->id);

        $cmp->name_company = $data->name_company;
        $cmp->address = $data->address;

        echo $cmp->save();
    }

    function deleteCompany(Request $data) {

        $cmp = company::find($data->id);

        echo $cmp->delete();
    }
}
