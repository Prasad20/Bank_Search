<?php

namespace App\Http\Controllers;

use App\id_info_model;
use Illuminate\Http\Request;

use App\bank_info_model;

use phpDocumentor\Reflection\Types\Null_;

class bank_id_controller extends Controller
{

    public function index()
    {
        return view('bank_welcome');
    }


    public function create()
    {
        $errors = 1;

        return view('bank_id_create',compact('errors'));
    }

    public function store(Request $request)
    {

        $var =  id_info_model::where('name',request()->bank_name)->get();

        if(count($var)>0)
        {
            $errors = 0;

            return view('bank_id_create',compact('errors'));
        }

        $id = new id_info_model();

        $id->name = request()->bank_name;

        $id->save();

        return view('bank_welcome');
    }

    public function show()
    {

        $type = request()->type;

        if($type=='ifsc')
        {
            $code = bank_info_model::where('code',request()->code)->get();

            $name = id_info_model::find($code[0]->id);

            $name = $name->name;
        }
        else {

            if (request()->area) {

                $code = bank_info_model::where('adr', request()->area)->get();

            }
            else
            {
                $branch_code = id_info_model::where('name',request()->name)->get();

                $code = bank_info_model::where('id',$branch_code[0]->id)->get();
            }

            $name = request()->name;
        }

        return view('bank_search_output', compact('code','name'));

//        $name = bank_info_model::where('name',$req->code)->get();
//
//        return view('code_show', compact('code','name'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
