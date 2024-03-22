<?php

class Database
{
    private function connect()
    {
        $string = "mysqli:host=localhost;dbname=mvc_db";
        $con = new PDO ($string, 'root', '');
        return $con;
    }

    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

        if (check)
        {
         $result = $stm->fetchAll(PDO::FETCH_OBJ);
         if(is_array($result)&& count($result)> 0)
         {
            return $result;
         }

        }
    }
}