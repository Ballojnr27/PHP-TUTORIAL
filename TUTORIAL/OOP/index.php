<?php 

  require('user_validator.php');

  
  if(isset($_POST['submit'])){
    // validate entries
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();


    if (empty($errors)){
      echo 'Form submitted successfully.';
    }

  }

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>Username: </label>
      <input type="text" name="username"/>
      <div class="error">
          <?php echo $errors['username'] ?? ''  ?>
      </div>

      <label>Email: </label>
      <input type="text" name="email"/>
      <div class="error">
          <?php echo $errors['email'] ?? ''  ?>
      </div>
      

      <input type="submit" value="submit" name="submit"/>

    </form>
  </div>

</body>
</html>

