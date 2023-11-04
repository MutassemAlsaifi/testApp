<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VisitorsController extends Controller
{
    public function index(){
        $visitors=Visitors::all();
foreach ($visitors as $visitor) {
    echo "
    ID VISITOR: $visitor->id .
    NAME VISITOR: $visitor->name .
    EMAIL VISITOR: $visitor->email .
    PASSWORD VISITOR: $visitor->password .
    CREATED AT VISITOR: $visitor->created_at .
    UPDATED AT VISITOR: $visitor->updated_at .
    <br> \n
    <br> \n
    <br> \n
    ";
}

    }


    public function create(){
        $visitors=new Visitors();
        $visitors->name = 'HAMED3_visitors';
        $visitors->email= 'AHMED3@A.CONM';
        $visitors->password = Hash::make('1234567822');
       $isSave= $visitors->save();
        if($isSave){
            echo 'the visitor is saved';
        }
        }

        public function show($id){
            $visitors=Visitors::findOrFail($id);

            echo "
            ID VISITOR: $visitors->id .
            NAME VISITOR: $visitors->name .
            EMAIL VISITOR: $visitors->email .
            PASSWORD VISITOR: $visitors->password .
            CREATED AT VISITOR: $visitors->created_at .
            UPDATED AT VISITOR: $visitors->updated_at .
            <br> \n
            <br> \n
            <br> \n
            ";

        }


    public function delete($id){
        $visitors=Visitors::findOrFail($id);
      $idDeleted=  $visitors->delete();
if($idDeleted){
    echo 'the visitor is deleted';
}
    }
}
