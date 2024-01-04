<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the file where FormInfoClass is defined
    include 'index.php';

    $formData = new FormInfoClass();

    $formData->setLastName($_POST["txtLastName"]);
    $formData->setFirstName($_POST["txtFirstName"]);
    $formData->setMiddleInitial($_POST["txtMiddleInitial"]);
    $formData->setAge($_POST["txtAge"]);
    $formData->setContact($_POST["txtContact"]);
    $formData->setEmail($_POST["txtEmail"]);
    $formData->setAddress($_POST["txtAddress"]);
    $formData->setUsername($_POST["txtUsername"]);
    $formData->setPassword($_POST["txtPassword"]);

    // Validate inputs
    $validationResult = $formData->validateInputs();

    if ($validationResult === true) {
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbregistration";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO userinfo (lastName, firstName, middleInitial, age, contactNo, email, address, username, password)
                VALUES ('" . $formData->getLastName() . "', '" . $formData->getFirstName() . "', '" . $formData->getMiddleInitial() . "',
                        '" . $formData->getAge() . "', '" . $formData->getContact() . "', '" . $formData->getEmail() . "',
                        '" . $formData->getAddress() . "', '" . $formData->getUsername() . "', '" . $formData->getPassword() . "')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful. Data has been saved to the database.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "<p>Validation Error: " . $validationResult . "</p>";
    }
} else {
    echo "<p>Form not submitted.</p>";
}
?>

