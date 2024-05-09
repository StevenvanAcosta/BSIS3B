<?php
    function show($stuff){
        echo '<pre>';
        print_r($stuff);
        echo '</pre>';
    }

    function redirect($location){
        header("location: ". ROOT ."/$location");
    }

    function formattedDateTime($datetime){
        $date = new DateTime($datetime);
        return $date->format('M. d, Y (h:i A)');
    }