<?php

class User extends Model
{
  public function validate($data)
  {
    $this->errors = [];
   
    if (empty($data['fname'])) {
      $this->errors['fname'] = "First name is required.";
    }

    if (empty($data['lname'])) {
      $this->errors['lname'] = "Last name is required.";
    }

    if (empty($data['email'])) {
      $this->errors['email'] = "Email address is required.";
    } //else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    //   $this->errors['username'] = "Email address is not valid.";
    // }

    if (empty($data['password'])) {
      $this->errors['password'] = "Password is required.";
    } else if (strlen($data['password']) < 6) {
      $this->errors['password'] = "Password must be atleast 6 characters long.";
    }

    if (count($this->errors) == 0) {
      return true;
    } else {
      return false;
    }
  }
}