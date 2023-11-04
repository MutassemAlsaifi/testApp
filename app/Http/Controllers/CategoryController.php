<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
function store(){
    $Categories = DB::table('categories')->insert(
        [
            'name'=>'sports',
            'created_at'=>now(),
            'updated_at'=>now(),
        ] );
if($Categories){
    echo 'the store operation is successful';
}
    }
    function read(){
        $Categories = DB::table('categories')->
        select('name' , 'created_at', 'updated_at')->get();

        foreach($Categories as $Category){
    echo "the name of Category is $Category->name || and is created at
     $Category->created_at
and updated at $Category->updated_at <br>;
     ";
        }


    }
    function show($id){
        $Categories = DB::table('categories')->where('id',$id)->get();

        foreach($Categories as $Category){
            echo "the name of Category is $Category->name || and is created at
             $Category->created_at
        and updated at $Category->updated_at <br>;
             ";
                }

    }
    function update($id){
        $Categories = DB::table('categories')->where('id',$id)->update([
            'name'=>'clothes',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        if($Categories)
        echo 'the update operation is successful';

    }
    function delete($id){
        $Categories = DB::table('categories')->where('id',$id)->delete();
        if($Categories)
        echo 'the delete operation is successful';

}
    function deleteAll(){
        $Categories = DB::table('categories')->delete();
        if($Categories)
        echo 'the deleteAll operation is successful';

}

}
