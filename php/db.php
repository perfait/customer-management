<?php

function createdb(){



    $servername="localhost";
    $username="root";
    $password="";
    $dbname="evaluation";
    


        //create connectionfr
    $con = mysqli_connect($servername, $username, $password);

        //check connection
    
    if(!$con){
        die("Connection Failed:" .mysqli_connect_error());
    }

    //create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql="
            
            CREATE TABLE IF NOT EXISTS customers(
                id VARCHAR(8)NOT NULL PRIMARY KEY,
                firstName VARCHAR(25)   NOT NULL,
                lastName VARCHAR(20),
                phoneNumber VARCHAR(20),
                dateOfBirth DATE NOT NULL
            );

        ";

    if(mysqli_query($con, $sql)){
        return $con;
        
    }else{
        echo "Cannot create table";
    }

    } else{
        echo "Error while connecting to database" .mysqli_error($con);
    }
}
