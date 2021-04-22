<?php
session_start();
 include('header.php');
 include('navbar.php');
 ?>
 

 <div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary"> Edit </h6>
        </div>
        <div class="card-body">
            <?php

            $connection = mysqli_connect("localhost","root","","registration");

                if(isset($_POST['edit_btn']))
                {
                    $id = $_POST['edit_id'];
                    $query = "SELECT id, title, camera, photographe, date FROM post WHERE id='$id' ";
                    $query_run = mysqli_query($connection,$query);
                
                    foreach($query_run as $row)
                    {
                        ?>
        <form action="code.php" method ="POST">

            <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label >Title</label>
                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label >Camera</label>
                <input type="text" name="edit_camera" value="<?php echo $row['camera'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label >Potographe</label>
                <input type="text" name="edit_photographe" value="<?php echo $row['photographe'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label >Date</label>
                <input type="date" name="edit_date" value="<?php echo $row['date'] ?>" class="form-control" placeholder="Enter Password">
            </div>
                <a href="register1.php" class="btn btn-danger"> Cancel </a>
            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
        </form>

            <?php
                    }
                }
                
            ?>
        </div>
        </div>
    </div>
</div>


<?php
 include('scripts.php');
?>