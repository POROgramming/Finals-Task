<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<header>
    <h1>Online Registration</h1>
</header>
<body>
<div class="container">
    <h4>Fill in the following:</h4>
    
    <form method="POST" action="output.php">
     
        <label for="txtLastName">LASTNAME:</label>
        <input type="text" name="txtLastName" required><br>

        <label for="txtFirstName">FIRST NAME:</label>
        <input type="text" name="txtFirstName" required><br>

        <label for="txtMiddleInitial">MIDDLE INITIAL:</label>
        <input type="text" name="txtMiddleInitial"><br>

        <label for="txtAge">AGE:</label>
        <input type="number" name="txtAge" required><br>

        <label for="txtContact">CONTACT NUMBER:</label>
        <input type="number" name="txtContact" required><br>

        <label for="txtEmail">EMAIL:</label>
        <input type="email" name="txtEmail" required><br>

        <label for="txtAddress">ADDRESS:</label>
        <input type="text" name="txtAddress"><br>

        <label for="txtUsername">USERNAME:</label>
        <input type="text" name="txtUsername" required><br>

        <label for="txtPassword">PASSWORD:</label>
        <input type="password" name="txtPassword" required><br>

        <input type="submit" name="btnSubmit">
    </form>
    <?php
        class FormInfoClass {
            private $LastName;
            private $FirstName;
            private $MiddleInitial;
            private $Age;
            private $Contact;
            private $Email;
            private $Address;
            private $Username;
            private $Password;
            public function validateInputs() {
                // Validate Last Name and First Name (no symbols, not null)
                if (!preg_match("/^[a-zA-Z ]*$/", $this->LastName) || empty($this->LastName)) {
                    return "Invalid Last Name";
                }
                if (!preg_match("/^[a-zA-Z ]*$/", $this->FirstName) || empty($this->FirstName)) {
                    return "Invalid First Name";
                }
        
                // Validate Middle Initial (no symbols)
                if (!empty($this->MiddleInitial) && !preg_match("/^[a-zA-Z]*$/", $this->MiddleInitial)) {
                    return "Invalid Middle Initial";
                }
        
                // Validate Age (greater than 0)
                if ($this->Age <= 0) {
                    return "Age should be greater than 0";
                }
        
                // Validate Contact Number (11 digits only)
                if (!preg_match("/^[0-9]{11}$/", $this->Contact)) {
                    return "Invalid Contact Number";
                }
        
                // Validate Email (allow null)
                if (!filter_var($this->Email, FILTER_VALIDATE_EMAIL) && !empty($this->Email)) {
                    return "Invalid Email";
                }
        
                // Validate Address (no symbols, not null)
                if (!preg_match("/^[a-zA-Z0-9 ]*$/", $this->Address) || empty($this->Address)) {
                    return "Invalid Address";
                }
        
                // Validate Username (no symbols, not null)
                if (!preg_match("/^[a-zA-Z0-9]*$/", $this->Username) || empty($this->Username)) {
                    return "Invalid Username";
                }
        
                // Validate Password (no symbols, not null)
                if (!preg_match("/^[a-zA-Z0-9]*$/", $this->Password) || empty($this->Password)) {
                    return "Invalid Password";
                }
        
                // If all validations pass, return true
                return true;
            }
        
        
            // Setter methods
            public function setLastName($lastName) {
                $this->LastName = $lastName;
            }

            public function setFirstName($firstName) {
                $this->FirstName = $firstName;
            }

            public function setMiddleInitial($middleInitial) {
                $this->MiddleInitial = $middleInitial;
            }

            public function setAge($age) {
                $this->Age = $age;
            }

            public function setContact($contact) {
                $this->Contact = $contact;
            }

            public function setEmail($email) {
                $this->Email = $email;
            }

            public function setAddress($address) {
                $this->Address = $address;
            }

            public function setUsername($username) {
                $this->Username = $username;
            }

            public function setPassword($password) {
                $this->Password = $password;
            }

            // Getter methods
            public function getLastName() {
                return $this->LastName;
            }

            public function getFirstName() {
                return $this->FirstName;
            }

            public function getMiddleInitial() {
                return $this->MiddleInitial;
            }

            public function getAge() {
                return $this->Age;
            }

            public function getContact() {
                return $this->Contact;
            }

            public function getEmail() {
                return $this->Email;
            }

            public function getAddress() {
                return $this->Address;
            }

            public function getUsername() {
                return $this->Username;
            }

            public function getPassword() {
                return $this->Password;
            }
        }
        ?>
</div>
</body>
</html>
