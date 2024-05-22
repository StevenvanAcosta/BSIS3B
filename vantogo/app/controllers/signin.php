<?php

class signin extends Controller
{
  public function index()
  {
    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      $arr['email'] = $_POST['email'];

      $row = $user->first($arr);

      if ($row) {

        if (password_verify($_POST['password'], $row->password)) {

          Auth::authenticate($row);
          if($_SESSION['USER']->role == 'User'){
            redirect('home');
          }
          else if($_SESSION['USER']->role == 'Admin'){
            redirect('admin');
          }
          
        } else {
          $errors['errors'] = "Invalid email or password!";
        }
      } else {
        $errors['errors'] = "Invalid email or password!";
      }
    }

    $this->view('login', [
      'errors' => $errors
    ]);
  }
}