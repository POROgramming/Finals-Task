<html>
    <head>
        <title>Class and Object Demo</title>
    </head>
    <body>
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

            // Usage of the FormInfoClass
            // $formInfo = new FormInfoClass();
            // $formInfo->setLastName("Doe");
            // $formInfo->setFirstName("John");
            // $formInfo->setMiddleInitial("M");
            // $formInfo->setAge(25);
            // $formInfo->setContact(1234567890);
            // $formInfo->setEmail("john.doe@example.com");
            // $formInfo->setAddress("123 Main Street");
            // $formInfo->setUsername("john_doe");
            // $formInfo->setPassword("password123");

            // echo "<h2>Output using FormInfoClass</h2>";
            // echo "<h3>Last Name: ".$formInfo->getLastName()."</h3>";
            // echo "<h3>First Name: ".$formInfo->getFirstName()."</h3>";
            // echo "<h3>Middle Initial: ".$formInfo->getMiddleInitial()."</h3>";
            // echo "<h3>Age: ".$formInfo->getAge()."</h3>";
            // echo "<h3>Contact: ".$formInfo->getContact()."</h3>";
            // echo "<h3>Email: ".$formInfo->getEmail()."</h3>";
            // echo "<h3>Address: ".$formInfo->getAddress()."</h3>";
            // echo "<h3>Username: ".$formInfo->getUsername()."</h3>";
            // echo "<h3>Password: ".$formInfo->getPassword()."</h3>";
        ?>
    </body>
</html>
