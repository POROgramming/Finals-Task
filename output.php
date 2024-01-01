<?PHP 

include('FormInfoClass.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Output</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create an instance of the FormInfoClass
    $formData = new FormInfoClass();

    // Set values from the form
    $formData->setLastName($_POST["txtLastName"]);
    $formData->setFirstName($_POST["txtFirstName"]);
    $formData->setMiddleInitial($_POST["txtMiddleInitial"]);
    $formData->setAge($_POST["txtAge"]);
    $formData->setContact($_POST["txtContact"]);
    $formData->setEmail($_POST["txtEmail"]);
    $formData->setAddress($_POST["txtAddress"]);
    $formData->setUsername($_POST["txtUsername"]);
    $formData->setPassword($_POST["txtPassword"]);

    // Display the entered data
    echo "<h2>Registration Information:</h2>";
    echo "<p><strong>Last Name:</strong> " . $formData->getLastName() . "</p>";
    echo "<p><strong>First Name:</strong> " . $formData->getFirstName() . "</p>";
    echo "<p><strong>Middle Initial:</strong> " . $formData->getMiddleInitial() . "</p>";
    echo "<p><strong>Age:</strong> " . $formData->getAge() . "</p>";
    echo "<p><strong>Contact Number:</strong> " . $formData->getContact() . "</p>";
    echo "<p><strong>Email:</strong> " . $formData->getEmail() . "</p>";
    echo "<p><strong>Address:</strong> " . $formData->getAddress() . "</p>";
    echo "<p><strong>Username:</strong> " . $formData->getUsername() . "</p>";
    echo "<p><strong>Password:</strong> " . $formData->getPassword() . "</p>";
} else {
    // Handle the case where the form is not submitted
    echo "<p>Form not submitted.</p>";
}
?>


</body>
</html>
