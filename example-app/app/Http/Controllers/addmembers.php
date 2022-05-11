<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;
class addmembers extends Controller
{
    function fetdata(){
       $data=member::paginate(1);
       return view('memberlist',['members'=>$data]);
    }
}
