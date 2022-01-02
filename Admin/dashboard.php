<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hbmsaid']==0)) {
  header('location:logout.php');
  } 


?>
<!DOCTYPE html>
<html lang="eng" and dir="ltr">

<head>
<title>Hotel Booking Management System | Dashboard</title>

</head>

<body>
    <div id="header">
        <center>
            <img src="admin/images/adminLogo.png" alt="adminLogo" id="adminLogo"><br>Admin Panel
        </center>

    </div>
    <div id="sidebar">
        <ul>
            
            <li><a style="text-decoration:none" href="add-category.php">Add Category</a></li>
            <li><a style="text-decoration:none" href="manage-category.php">Manage Category</a></li>
            <li><a style="text-decoration:none" href="add-facility.php">Add Facility</a></li>
            <li><a style="text-decoration:none" href="manage-facility.php">Manage Facility</a></li>
            <li><a style="text-decoration:none" href="add-room.php">Add Room</a></li>
            <li><a style="text-decoration:none" href="manage-room.php">Manage Room</a></li>
           <li><a style="text-decoration:none" href="reg-users.php">reg-users</a></li>
            <li>Contact Developer</li>
            <a style="text-decoration:none" href="logout.php">
                <li>Logout</li>
            </a>

        </ul>
    </div>

    <div id="data">





    </div>

</body>

</html>

<style>
    body {
        margin: 0px;
        border: 0px;
    }

    #header {
        width: 100%;
        height: 160px;
        background: black;
        color: white;
    }

    #sidebar {
        width: 300px;
        height: 600px;
        background: teal;
        float: left;
    }

    #data {
        height: 700px;
        background: tomato;
    }

    #adminLogo {
        background: white;
        border-radius: 50px;
        width: 100px;
    }

    ul li {
        padding: 20px;
        border-bottom: 2px solid yellowgreen;
    }

    ul li:hover {
        background: tomato;
        color: white;
    }
</style>