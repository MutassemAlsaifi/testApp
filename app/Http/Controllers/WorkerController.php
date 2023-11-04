<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{
    function store(){
$workers = DB::table('workers')->insert([
'name'=>'ahmed3',
'email'=>'ahmed3@gmail.com',
'password'=>Hash::make('123456789'),
'created_at'=>now(),
'updated_at'=>now(),

]);

if($workers){
    echo 'add workers successfully';
}
    }

    function index(){
        $workers = DB::table('workers')->get();

        foreach($workers as $worker){
    echo "the id of worker is $worker->id||the name of worker is $worker->name || , the email of is $worker->email || and is created at
     $worker->created_at
and updated at $worker->updated_at <br>
     ";

    }

}
function show($id){
    $workers = DB::table('workers')->where('id',$id)->get();

    foreach($workers as $worker){
        echo "the id of worker is $worker->id ||the name of worker is $worker->name || , the email of is $worker->email || and is created at
         $worker->created_at
    and updated at $worker->updated_at <br>
         ";
}
}
function update($id){
    $workers = DB::table('workers')->where('id',$id)->update(
[
'name'=>'ali_update',
'email'=>'ali_update2gmail.com',

]

    );

if($workers){
    echo 'update workers successfully';
}
}
function delete($id){
    $workers = DB::table('workers')->where('id',$id)->delete();
    if($workers){
        echo 'delete workers successfully';
    }

}
function trancate(){
    $workers = DB::table('workers')->truncate();
    if($workers){
        echo 'delete all workers successfully';
    }

}

}