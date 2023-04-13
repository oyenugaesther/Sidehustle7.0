<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page </title>
</head>
<body>

    <?php
        include 'header.php';
    ?>

    <h3> Create an Account </h3>

    <form action="process.php" method="post" >
        <label for="">  First Name:  </label>
        <input type="text" name="firstname" required>
        <br><br>

        <label for="">  Last Name:  </label>
        <input type="text" name="lastname" required>
        <br><br>

        <label for="">  Username:  </label>
        <input type="text" name="username" required>
        <br><br>

        <label for="">  Email:  </label>
        <input type="email" name="email"required >
        <br><br>

        <label for="">  Gender:  </label>
        <select name="gender" id="gender" required>
            <option value=""> Select Gender </option>
            <option value="M"> Male </option>
            <option value="F"> Female </option>
        </select>
        <br><br>

        <label for="">  Password:  </label>
        <input type="password" name="password" required>
        <br><br>

        <label for="">  Confirm Password:  </label>
        <input type="password" name="confirm_password" required>
        <br><br>

        <input type="submit" value="Register" name="register_user">
    </form>
</body>
</html>