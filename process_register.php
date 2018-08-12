<?php
    session_start();
$db = mysqli_connect('localhost', 'root', '', 'pos');
    $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
    $Lastname=mysqli_real_escape_string($db, $_POST['lastname']);
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, md5($_POST['password']));
    $query=mysqli_query($db,"select * from `user` where username='$username'");
  if(mysqli_fetch_array($query))
  {?>
          <script>
          window.alert('Username is already exists.Try another!');
          window.location.href='register.php';
        </script>
  <?php }
 
    
     else {      
           $query="INSERT INTO  `user`   VALUES(NULL,'$username','$password','$firstname','$Lastname')";
           $ms=mysqli_query($db,$query);
    if($ms)
    {
    	?>
    	<script>
					window.alert('Sign up Success, Please now Login !');
					window.location.href='index.php';
				</script>
<?php
    }   
    } 
?>