<?php
include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <?php
            $sql = "SELECT * FROM userinfo ORDER BY userID DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<div class="alert alert-success" role="alert">';
                echo 'Registration successful for ' . $row["firstName"] . ' ' . $row["lastName"] . '.';
                echo '</div>';

                echo '<h3 class="card-title">' . $row["firstName"] . ' ' . $row["lastName"] . '</h3>';
                echo '<p class="card-text"><strong>ID:</strong> ' . $row["userID"] . '</p>';
                echo '<p class="card-text"><strong>Last Name:</strong> ' . $row["lastName"] . '</p>';
                echo '<p class="card-text"><strong>First Name:</strong> ' . $row["firstName"] . '</p>';
                echo '<p class="card-text"><strong>Middle Initial:</strong> ' . $row["middleInitial"] . '</p>';
                echo '<p class="card-text"><strong>Age:</strong> ' . $row["age"] . '</p>';
                echo '<p class="card-text"><strong>Contact Number:</strong> ' . $row["contactNo"] . '</p>';
                echo '<p class="card-text"><strong>Email:</strong> ' . $row["email"] . '</p>';
                echo '<p class="card-text"><strong>Address:</strong> ' . $row["address"] . '</p>';
                echo '<p class="card-text"><strong>Username:</strong> ' . $row["username"] . '</p>';
               
                echo '<p class="card-text"><strong>Password:</strong> ' . $row["password"] . '</p>';
                echo '<a href="login.php" class="btn btn-primary">Login</a>';
            } else {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'No records found in the database.';
                echo '</div>';
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
