<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php  require 'db_connect.php';

    $sql = " SELECT * FROM students
             JOIN student_class 
             ON students.s_class = student_class.c_id";

   $result = mysqli_query($conn,$sql) or die("tables error");

   if(mysqli_num_rows($result)>0)
    {
    
    ?>
    <h1>Hello, world!</h1>

    
    <div class="container">
        <table class="table">
 
    
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
     <?php 
     while($row = mysqli_fetch_assoc($result))
        {
    
    ?>
    
    <tr>
       <td>
  <a href="update.php?id=<?php echo $row['s_id']; ?>" class="btn btn-warning btn-sm">
    Edit
  </a>
</td>

      <td><?php echo $row['s_id']; ?></td>
      <td><?php echo $row['s_name']; ?></td>
      <td><?php echo $row['s_address']; ?></td>
      <td><?php echo $row['c_class']; ?></td>
      <td><?php echo $row['s_phone']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
    </div>

    <!-- success message -->
<?php if(isset($_GET['msg']) && $_GET['msg'] == 'updated') { ?>
    <div class="alert alert-success container mt-3">
        Student updated successfully!
    </div>
<?php } ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>