<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Home extends Controller
{
    public function index(){
        return view('home');
    }
    private function aboutNumber($number = null)
    {
        # code...
    }
    private function aboutText($txt = null)
    {
        # code...
    }
    public function about($id=null){
        if($id)
        return "about page with text ".$id;
    }
    public function aboutN($id=null)
    {
        return "about page with number ".$id;
    }
}
