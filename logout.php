<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
        <li class="nav-item">
        <form method="post">
      <input type="submit" name="logout2" value="Log out">
      </form>
        </li>
</ul>
</div>


<?php
// session_start();
    if(isset($_POST['logout2']))
    {        
         header("location: http://localhost/Final%20Project/login.php");
    }
?>
