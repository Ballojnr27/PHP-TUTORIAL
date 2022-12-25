<?php
    
    include('db_connect.php');

    $title = $email = $ingredients = '';
    $error = array('email'=>'', 'title'=>'', 'ingredient'=>'');

    if (isset($_POST['submit']))
    {
        // check email
        if (empty($_POST['email']))
        {
            $error['email'] = "An email is required </br>";
        }
        else{
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'Email must be a valid email address.</br>';
            }    
            else{echo htmlspecialchars($_POST['email']).'</br>';}
        }
        
        // check title
        if (empty($_POST['title']))
        {
            $error['title'] = "A type of flier is required </br>";
        }
        else{
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $error['title'] = 'Type of flier must be letters and spaces only.</br>';
            }
            else{echo htmlspecialchars($_POST['title']).'</br>';}
        }

        // check ingredient
        if (empty($_POST['ingredients']))
        {
            $error['ingredient'] = "At least one service is required </br>";
        }
        else{
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $error['ingredient'] = 'Services must be a comma seperated list.</br>';
            }
            else{echo htmlspecialchars($_POST['ingredients']).'</br>';}
        }
        
        if(!array_filter($error))
        {
            $email = mysqli_real_escape_string($conn, ($_POST['email']));
            $title = mysqli_real_escape_string($conn, ($_POST['title']));
            $ingredients = mysqli_real_escape_string($conn, ($_POST['ingredients']));

            // create sql
            $sql = "INSERT INTO designs(title, email, services) VALUES('$title', '$email' , '$ingredients')";

            if(mysqli_query($conn, $sql))
            {
                // connected
                header('Location: index.php');
            }
            else
            {
                echo 'query error: ' . mysqli_error($conn); 
            }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php  include('header.php')?>

<section class="container" grey-text>
    <h4 class="center">Add a Flyer</h4>
    <form action="add.php" class="white" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <dev class="red-text"><?php echo $error['email'];  ?></dev>
        <label>Type of Flyer:</label>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <dev class="red-text"><?php echo $error['title'];  ?></dev>
        <label>Services (comma seperated):</label>
        <input type="text" name="ingredients" value="<?php echo $ingredients; ?>">
        <dev class="red-text"><?php echo $error['ingredient'];  ?></dev>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php  include('footer.php')?>
</html>