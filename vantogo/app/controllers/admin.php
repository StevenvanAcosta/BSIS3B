<?php
    class admin extends Controller{
        public function index(){
            $this->view('admin');
        }

        public function add_van(){
            $this->view('addvan', [
                'err' => []
            ])
        }

        public function insert_van(){
            if (count($_POST) > 0){
                
            }
            else {
                redirect('admin');
            }
        }

    }