<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Student</title>
</head>
<body>

<?php require 'view.php';

if(isset($_POST['submit'])) {
    $name    = $_POST['s_name'];
    $address = $_POST['s_address'];
    $class   = $_POST['s_class'];
    $phone   = $_POST['s_phone'];

    $sql = "INSERT INTO students (s_name, s_address, s_class, s_phone) 
            VALUES ('$name', '$address', '$class', '$phone')";

    if(mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success container mt-3'>Student added successfully! <a href='view.php'>View All</a></div>";
    } else {
        echo "<div class='alert alert-danger container mt-3'>Error: " . mysqli_error($conn) . "</div>";
    }
}

// Fetch classes for dropdown
$class_sql = "SELECT * FROM student_class";
$class_result = mysqli_query($conn, $class_sql);
?>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 'updated') { ?>
    <div class="alert alert-success">Student updated successfully!</div>
<?php } ?>
<div class="container mt-5">
    <h2>Add New Student</h2>
    <hr>
    <form method="POST" action="">

        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" name="s_name" class="form-control" placeholder="Enter name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="s_address" class="form-control" placeholder="Enter address" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Class</label>
            <select name="s_class" class="form-select" required>
                <option value="">-- Select Class --</option>
                <?php while($row = mysqli_fetch_assoc($class_result)) { ?>
                    <option value="<?php echo $row['c_id']; ?>">
                        <?php echo $row['c_class']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="s_phone" class="form-control" placeholder="Enter phone number" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
        <a href="view.php" class="btn btn-secondary">Back to List</a>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>