<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\DB;

class membercontroller extends Controller
{
   function opeations(){
      return DB::table('members')->where ('id',1)->delete();
   }
}
