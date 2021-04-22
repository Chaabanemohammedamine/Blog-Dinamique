<?php
session_start();
 include('header.php');
 include('navbar.php');
 ?>
 

<div class="modal fade" id="addadmiprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">

        <div class="form-group">
            <label >Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter le titre">
        </div>
        <div class="form-group">
            <label >Camera</label>
            <input type="text" name="camera" class="form-control" placeholder="Enter le nom de camera">
        </div>
        <div class="form-group">
            <label >Photographe</label>
            <input type="text" name="photographe" class="form-control" placeholder="Enter  le nom du phtographe">
        </div>
        <div class="form-group">
            <label >Date</label>
            <input type="date" name="date" class="form-control" placeholder="Enter la date">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>

      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadmiprofile">
             Add Post
            </button>
            </h6>
        </div>
        <div class="card-body">
        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2 class="btn btn-success text-white"> '.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2 class="btn btn-danger text-white"> '.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
            <div class="table-reponsive">
                <?php
                $connection = mysqli_connect("localhost","root","","registration");
                $query = "SELECT id, title, camera, photographe, date FROM post";
                $query_run = mysqli_query($connection,$query);
                
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Camera</th>
                            <th>Photographe</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Dellete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                       <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['camera'];?></td>
                            <td><?php echo $row['photographe'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td>
                            <form action="register_edit.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                            </form>
                            </td>
                            <td>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger">Dellete</button>
                            </form>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        else {
                            echo"";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
     include('scripts.php');
    ?>