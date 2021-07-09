<?php

require_once("db.php");


$con = Createdb();

//create button click

if(isset($_POST['create'])){
    createCustomers();
}


if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();
}

//create customers function
function createCustomers(){
    $firstName = textboxValue("firstName");
    $lastName = textboxValue("lastName");
    $dateOfBirth = textboxValue("dateOfBirth");
    $idNumber = textboxValue("idNumber");
    $phoneNumber = textboxValue("phoneNumber");
    

    if($firstName && $dateOfBirth && $idNumber){
        
       
        $sql = "INSERT INTO customers(id, firstName, lastName,  phoneNumber, dateOfBirth)
                VALUES('$idNumber', '$firstName','$lastName', '$phoneNumber', '$dateOfBirth')";
            

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("Success", "Record Successfully inserted...!");
            
        }else{
            echo "Error";
        }


    }else {
       TextNode("error", "Provide data in the text box");
    }
}






function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}



//messages function
function TextNode($classname, $msg){
    $element="<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from mysql database

function getData(){
    $sql="SELECT*FROM customers";

    $result = mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }

}

