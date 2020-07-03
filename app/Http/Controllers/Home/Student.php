<?php
namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Student extends Controller
{
    public function index(){
        return "student";
    }
    public function class(){
        return "student class";
    }
    public function role(){
        return "student role";
    }
}