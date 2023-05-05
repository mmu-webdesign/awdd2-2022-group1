<?php

// This code must go at the top of each page that uses database content

// your connection information goes here

$server_name = "[your server IP]"; // the IP address, which is the third item in the 34sp phpMyAdmin login form
$user_name = "[your db username]"; // the username you specified when you created the database
$password = "[your db password]"; // the password you specified when you created the database
$db_name = "[your db name]"; // the database name you specified when you created the database
$table_name ="[your db table name]"; // the table name you specified when you created the SQL in SQLizer

// STOP EDITING HERE: Upload this file to 34sp.com now

// Create connection
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// now we make some HTML

?>
<nav>
    <div class="nav-wrapper">
      <a href="index.html" class="logo">
        <img src="img/logo.jpg">
      </a>
      <div class="logo"><a href="#"></a></div>
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="nav-menu">
        <li><a href="news.html">News</a></li>
        <li class="dropdown">
          <a href="#">Seasons</a>
          <ul class="dropdown-menu">
            <li><a href="spring.html">Spring</a></li>
            <li><a href="summer.html">Summer</a></li>
            <li><a href="autumn.html">Autumn</a></li>
            <li><a href="winter.html">Winter</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Locations</a>
          <ul class="dropdown-menu">
            <li><a href="shopping-locations.html">Where to shop</a></li>
            <li><a href="nights-out.html">Nights out</a></li>
          </ul>
        </li>
        <li><a href="trends.html">Trends</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </nav>
<?php 



$sql = "SELECT * FROM ".$table_name.";";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<h1>The script has successfully connected and is getting information from the <span>$table_name</span> table.</h1>";

    echo "<p>The sql query that has been run is <code>".$sql."</code>, which has resulted in the following fields being available for you to add to your site:</p><ul>";

    // output data of each row
    $i=1;
    while($row = mysqli_fetch_assoc($result)) {

        echo '<li><h2>Row '.$i.'</h2>';

        foreach($row as $name=>$r){

          echo '<p><code>&lt;?php echo $row[\''.$name.'\']; ?&gt;</code> will add <textarea class="content">'.$r.'</textarea> to your HTML</p>';
        }

  echo "</li>"; 
     $i++;
    }
    
} else {
    echo "<p>Sorry, something has gone wrong.</p>";
}

mysqli_close($conn);
?>
</ul>
</body>
</html>
