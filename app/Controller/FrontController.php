<?php 

namespace App\Controller;
use App\Model\User;
class FrontController{
    public static function home(){
        $id = $_GET['id'];
        $user  = User::find($id);
        var_dump($user->composite());
        return view('home.php');
    }
    public static function about(){
        return view('about.php');
    }
    public static function infs(){
        return view('infs.php');
    }
    public static function head(){
        return view('head.php');
    }
    public static function footer(){
        return view('footer.php');
    }
 }
