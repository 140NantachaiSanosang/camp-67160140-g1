<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function __construct(){

    }

    function index(){
        return view('MyViews.index');
    }
    function info(Request $req){
        echo $req->input('mynumber');
        return view('MyViews.info');
    }
    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('MyViews.calculate',$data);

    }
    function regis(request $req){
        $songs = [];
        if ($req->has('song1')) {
            $songs[] = $req->input('song1');
        }
        if ($req->has('song2')) {
            $songs[] = $req->input('song2');
        }
        if ($req->has('song3')) {
            $songs[] = $req->input('song3');
        }

        $songString = implode(', ', $songs);

        $data = [
            'fname' => $req->input('fname'),
            'lname' => $req->input('lname'),
            'birthdate' => $req->input('birthdate'),
            'age' => $req->input('age'),
            'sex' => $req->input('sex'),
            'picture' =>$req->input('picture'),
            'address' => $req->input('address'),
            'color' => $req->input('color'),
            'song' => $songString,

        ];


        return view('template.html101_view', $data);
    }
}
