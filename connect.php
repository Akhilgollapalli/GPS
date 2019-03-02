   <html>
   <body background="2.jpg">
   <?php
     $username = filter_input(INPUT_POST, 'username');
     $latitude1= filter_input(INPUT_POST, 'latitude1');
     $longitude1 = filter_input(INPUT_POST, 'longitude1');
     if (!empty($username))
     {
    $host = "localhost";
    $dbusername = "akhil123";
    $dbpassword = "Akhilakhi@1946";
    $dbname = "gps2";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error())
    {
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    
    }
    else
    {
        
    $sql = "INSERT INTO gps2 (username,latitude1,longitude1)
    values ('$username','$latitude1','$longitude1')";
    if ($conn->query($sql))
    {
    echo '<center><h2 color="blue" style="font-family:timesnewroman">Your Response is recorded successfully</h2></center>';
    }
    else
    {
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else
    {
    echo "Username should not be empty";
    die();
    }
    ?>
</body>
</html>
