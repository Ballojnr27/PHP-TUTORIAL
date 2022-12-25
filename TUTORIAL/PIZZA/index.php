<?php
  // MySQLi or PDO can be used to connect to database
  
  // connect to database
  $conn = mysqli_connect('localhost', 'Abdulgafar', 'test1234','amazon designs');

  // check connection
  if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
  }  

  //  write query for all designs
  $sql = 'SELECT title, services, id FROM designs ORDER BY ordered_at';

  // make query & get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $designs = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

 // print_r($designs);
?>

<!DOCTYPE html>
<html lang="en">

<?php  include('header.php')?>
  <h4 class="center grey-text">Designs!</h4>

  <div class="container">
      <div class="row">
          <?php foreach($designs as $design): ?>
           <div class="col s6 md3">
               <div class="card z-depth-0">
                   <img src="logobg.jpg" class="design">
                   <div class="card-content center">
                     <h6> <?php echo htmlspecialchars($design['title']);?></h6>
                     <ul>
                         <?php foreach(explode (',', $design['services']) as $serv) : ?>
                         <li><?php echo htmlspecialchars($serv)?></li>
                         <?php endforeach; ?>
                     </ul>
                   </div>
                   <div class="card-action right-align">
                       <a class="brand-text" href="details.php?id=<?php echo $design['id']; ?>">more info</a>
                   </div>
               </div>
           </div>
          <?php endforeach; ?>
      </div>
  </div>
<?php  include('footer.php')?>


</html>