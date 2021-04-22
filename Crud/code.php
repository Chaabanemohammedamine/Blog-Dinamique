<?php
session_start(); 

$connection = mysqli_connect("localhost","root","","registration");

if(isset($_POST['registerbtn']))
{
    $Title = $_POST['title'];
    $Camera = $_POST['camera'];
    $Photographe = $_POST['photographe'];
    $Date = $_POST['date'];

        $query = "INSERT INTO post (title,camera,photographe,date) VALUES ('$Title','$Camera','$Photographe','$Date')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "";
            header('Location: register1.php');
        }
        else
        {
            echo "Not Saved";
            $_SESSION['status'] = "";
            header('Location: register1.php');
        }
    }
    else
    {
    $_SESSION['status'] = "";
    header('Location: register1.php');
    }


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $Title = $_POST['edit_title'];
    $Camera = $_POST['edit_camera'];
    $Photographe = $_POST['edit_photographe'];
    $Date = $_POST['edit_date'];

    $query = "UPDATE post SET title='$Title', camera='$Camera', photographe='$Photographe',date='$Date' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
          
            $_SESSION['success'] = "";
            header('Location: register1.php');
        }
        else
        {
           
            $_SESSION['status'] = "";
            header('Location: register1.php');
        }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM post WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "";
            header('Location: register1.php');
        }
        else
        {
            
            $_SESSION['status'] = "";
            header('Location: register1.php');
        }
}




?>