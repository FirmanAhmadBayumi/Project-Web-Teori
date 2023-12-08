<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=> "Landing Page",
        ];
        return view("user/landing_Page", $data);
    }
    public function login()
    {
        $data = [
            "title"=> "Login",
        ];
        return view("auth/login", $data);
    }
    public function register()
    {
        $data = [
            "title"=> "Register",
        ];
        return view("auth/register", $data);
    }
    public function redirect(){

        if(in_groups("admin")) {
            return redirect()->to("/admin");
        }else if(in_groups("pegawai")) {
            return redirect()->to("/pegawai");
        }else{
            return redirect()->to("/user");
        }
    }
}
