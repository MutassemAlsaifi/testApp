<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    //
    public function store(){
$tests = new Test();
$tests ->name='ali';
$tests ->email='ali@';
$tests ->password=Hash::make('651516');

}
    public function index(){
        $tests =  Test::all();
foreach($tests as $test ){
    echo "
    THE ID IS : $test->id
    THE NAME IS : $test->name
    THE EMAIL IS : $test->email
    THE PASSWORD IS :$test->password
    <br> 
    ";
}
    }
}
