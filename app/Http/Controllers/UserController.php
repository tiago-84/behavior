<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return "<h1>Listagem de usuario comm codigo 1</h1>";
    }

    public function getData(){

        return "<h1>Disparou a ação de GET</h1>";

    }


    public function postData(Request $request){


        var_dump($request);

        //return "<h1>Disparou a ação de POST</h1>";

    }

    public function testPut(Request $request){

        echo "<h1>Usuario da edição é o de código 1</h1>";
        return "<h1>Disparou a ação de PUT</h1>";
        var_dump($request);


    }

    public function testPatch(Request $request){

        echo "<h1>Usuario da edição é o de código 1</h1>";
        return "<h1>Disparou a ação de PATCH</h1>";
        var_dump($request);


    }

    public function testMatch(Request $request){

        echo "<h1>Usuario da edição é o de código 2</h1>";
        var_dump($request);
        return "<h1>Disparou a ação de PUT/PATCH</h1>";


    }
}
