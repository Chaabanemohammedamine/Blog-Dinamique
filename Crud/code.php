<?php
session_start(); 

$connection = mysqli_connect("localhost","root","","registration");

if(isset($_POST['registerbtn']))
{
    $Title = $_POST['title'];
    $Image = $_POST['image'];
    $Photographe = $_POST['photographe'];

        $query = "INSERT INTO posts (title,image,photographe,) VALUES ('$Title','$image','$Photographe')";
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
    $Image = $_POST['edit_image'];
    $Photographe = $_POST['edit_photographe'];

    $query = "UPDATE posts SET title='$Title', image='$Image', photographe='$Photographe' WHERE id='$id'";
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
    $query = "DELETE FROM posts WHERE id='$id'";
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