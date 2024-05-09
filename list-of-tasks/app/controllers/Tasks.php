<?php
    class Tasks extends Controller{
        public function index(){
            $task = new Task();
            $taskList = $task->findAll();
            $this->view('tasks/index', [
                'tasks' => $taskList
            ]);
        }

        public function create(){
            $status = new Status();
            $statusList = $status->findAll();

            $this->view('tasks/create', [
                'status' => $statusList
            ]);
        }

        public function insert(){
            $task = new Task();

            if (count($_POST) > 0){
                $task->insert($_POST);
            }
            redirect('tasks/index');
        }

        public function edit($id){
            $task = new Task();
            $data['id'] = $id;
            $selectedTask = $task->where($data);

            $status = new Status();
            $statusList = $status->findAll();

            $this->view('tasks/edit', [
                'task' => $selectedTask[0],
                'status' => $statusList
            ]);
        }

        public function update(){
            $task = new Task();

            if (count($_POST) > 0){
                $task->update($_POST['id'], $_POST);
            }
            redirect('tasks/index');
        }

        public function delete($id){
            $task = new Task();
            $data['id'] = $id;
            $selectedTask = $task->where($data);

            $status = new Status();
            $statusList = $status->findAll();

            $this->view('tasks/delete', [
                'task' => $selectedTask[0],
                'status' => $statusList
            ]);
        }

        public function remove(){
            $task = new Task();

            if (count($_POST) > 0){
                $task->delete($_POST['id']);
            }
            redirect('tasks/index');
        }
    }