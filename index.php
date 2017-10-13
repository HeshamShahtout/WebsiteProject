<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>  
        <script>
            function validateForm() {
                var nameErr = document.forms["myForm"]["name"].value;
                if (nameErr == "") {
                    alert("Please Enter Your Name");
                    return false;
                } else if (!/^[A-Za-z\s]+$/.test(nameErr)) {
                    alert("Please Enter A Valid Name");
                    return false;
                }
                var emailErr = document.forms["myForm"]["email"].value;
                if (emailErr == "") {
                    alert("Please Enter Your E-mail");
                    return false;
                } else if (!/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+[^<>()\.,;:\s@\"]{2,})$/.test(emailErr)) {
                    alert("Please Enter A Valid Email");
                    return false;
                }


                var genderErr = document.forms["myForm"]["gender"].value;
                if (genderErr == "") {
                    alert("Please Select Your Gender");
                    return false;
                }
                var passErr = document.forms["myForm"]["pass"].value;
                if (passErr == "") {
                    alert("Please Enter Your Password");
                    return false;
                }
                var pass1 = document.forms["myForm"]["pass"].value;
                var pass2 = document.forms["myForm"]["confirmpass"].value;
                if (pass1 != pass2) {
                    alert("Passwords Do not match");
                    document.forms["myForm"]["pass"].style.borderColor = "#E34234";
                    document.forms["myForm"]["confirmpass"].style.borderColor = "#E34234";
                    return false;
                }
            }


        </script>
        <?php
        $name = $email = $gender = $comment = $website = "";
        ?>

        <h2> PHP Form Validation Example </h2>
        <p><span class="error">* required field.</span></p>
        <form name="myForm" method="post" action="db_connection.php" onsubmit="return validateForm()">  
            Name: <input type="text" name="name">
            <span class="error">* </span>
            <br><br>
            E-mail: <input type="text" name="email" >
            <span class="error">*</span>
            <br><br>
            Website: <input type="text" name="website"  >
            <br><br>
            Password: <input type= "password" name ="pass" >
            <br><br>
            ConfirmPassword: <input type= "password" name ="confirmpass" >
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male">Male
            <span class="error">*</span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

    </body>
</html>