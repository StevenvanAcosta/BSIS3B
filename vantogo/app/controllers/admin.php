<?php
    class admin extends Controller{
        public function index(){
            $this->view('admin');
        }

        public function add_van(){
            $this->view('addvan', [
                'err' => []
            ]);
        }

        public function insert_van(){
            if (count($_POST) > 0){
                $van = new Van();
                if (!empty(basename($_FILES['van_img']['name']))){
                    $_POST['van_img'] = basename($_FILES['van_img']['name']);
                }

                $van->insert($_POST);
                $lastId = $van->lastId;
                if (!empty($_POST['van_img'])){
                    $dir = 'uploads/vans_img/' . $lastId;
                    if (!is_dir($dir)){
                        mkdir($dir);
                    }

                    $imgFilename = $dir . '/' . $_POST['van_img'];
                    $tmpFile = $_FILES['van_img']['tmp_name'];
                    $upload = move_uploaded_file($tmpFile, $imgFilename);
                    if (!$upload){
                        $van->errors['van_img'] = 'Inserted but failed to upload image!';
                    }
                }

                if (count($van->errors) > 0){
                    show($van->errors);
                }
                else {
                    echo 'success';
                }
            }
            else {
                redirect('admin');
            }
        }

    }