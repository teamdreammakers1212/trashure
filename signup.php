<?php
require "Function.php";
$db = new DataBase();

if (isset($_POST['Lastname']) && isset($_POST['Firstname']) && isset($_POST['Middlename']) && isset($_POST['Cellphonenumber']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['Zone']) && isset($_POST['Gender'])){

    if ($db->dbConnect()) {

        if ($db->signUp("user_info", $_POST['Lastname'], $_POST['Firstname'], $_POST['Middlename'], $_POST['Cellphonenumber'], $_POST['username'], $_POST['password'],$_POST['Zone'],$_POST['Gender'])){

            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";

?>