<?php
require 'db_connect.php';

// Get ID
$id = $_GET['id'];

// Fetch student data
$sql = "SELECT * FROM students WHERE s_id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

// Fetch classes
$class_sql = "SELECT * FROM student_class";
$class_result = mysqli_query($conn, $class_sql);

// UPDATE logic
if(isset($_POST['update'])) {

    $name    = $_POST['s_name'];
    $address = $_POST['s_address'];
    $class   = $_POST['s_class'];
    $phone   = $_POST['s_phone'];

    $update_sql = "UPDATE students 
                   SET s_name='$name',
                       s_address='$address',
                       s_class='$class',
                       s_phone='$phone'
                   WHERE s_id=$id";

    mysqli_query($conn, $update_sql);

    header("Location: view.php?msg=updated");
    exit();
}
?>

<!doctype html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Student</title>
</head>
<body>

<div class="container mt-5">
    <h2>Edit Student</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="s_name" class="form-control"
                   value="<?php echo $data['s_name']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="s_address" class="form-control"
                   value="<?php echo $data['s_address']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Class</label>
            <select name="s_class" class="form-select" required>

                <?php while($row = mysqli_fetch_assoc($class_result)) { ?>
                    <option value="<?php echo $row['c_id']; ?>"
                        <?php if($data['s_class'] == $row['c_id']) echo "selected"; ?>>
                        <?php echo $row['c_class']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="s_phone" class="form-control"
                   value="<?php echo $data['s_phone']; ?>" required>
        </div>

        <button type="submit" name="update" class="btn btn-success">
            Update Student
        </button>

        <a href="view.php" class="btn btn-secondary">Back</a>

    </form>
</div>

</body>
</html>
