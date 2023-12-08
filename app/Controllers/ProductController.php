<?php

namespace App\Controllers;

use App\Models\M_user;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }

      $model = new M_user();
      $data['user'] = $model->get_user();

      return view('user_view', $data);
   }

}