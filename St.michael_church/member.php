     
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "au";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['register']))
{
    $name = $_POST['name'];
$id = $_POST['idno'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$state=$_POST['state'];
$sex=$_POST['sex'];
$dept=$_POST['dept'];
$year=$_POST['year'];
$ph=$_POST['photo'];
$sql = "insert into register(name,idno,email,pass,state,sex,department,year,photo) VALUES ('$name','$id','$email', '$pass','$state', '$sex','$dept','$year','$ph')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("you registered Succesfully");window.location=\'memb.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

        if(isset($_POST['delete']))
        {
            $sql="delete from register where idno='$_POST[idno]'";
          if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("you deleted your data Succesfully");window.location=\'memb.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if(isset($_POST['update']))
{
      $id=$_POST['idno'];
   $name = $_POST['name'];
    $email=$_POST['email'];
$pass=$_POST['pass'];
$stat=$_POST['state'];
$se=$_POST['sex'];
$dept=$_POST['dept'];
$year=$_POST['year'];
$ph=$_POST['photo'];
    $sql="update register set name='$name',email='$email',pass='$pass',state='$stat',sex='$se',department='$dept',year='$year',photo='$ph' where idno='$id'";
              if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("you updated your data Succesfully");window.location=\'memb.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

        mysqli_close($conn);
?> 
   

    <html>
    <head>
    <style>
        body
        {
            
            background-color:black;
            background-image: url(./img/maxresdefault.jpg);
            background-repeat: no-repeat;
           
        }
        table
        {
            border-collapse: collapse;
            background-color: darkorange;
            background-image: url(./img/a.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        </style>
    
    </head>
                <body>
    <table border="3px">
    <tr>
        <th>NAME</th>
        <th>IDNO</th>
         <th>EMAIL</th>
         <th>PASSWORD</th>
         <th>STATE</th>
         <th>SEX</th>
        <th>DEPARTMENT</th>
        <th>YEAR</th>
        <th>PHOTO</th>
    </tr>
                    <?php
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "au";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        if(isset($_POST['view']))
{

$sql="select * from register";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<th>".$row['name']."</th>";
     echo "<th>".$row['idno']."</th>";
       echo "<th>".$row['email']."</th>";
       echo "<th>".$row['pass']."</th>";
       echo "<th>".$row['state']."</th>";
       echo "<th>".$row['sex']."</th>";
       echo "<th>".$row['department']."</th>";
       echo "<th>".$row['year']."</th>";
       echo "<th>".$row['photo']."</th>";
    echo "</tr>";
}
        }
mysqli_close($conn);
?> 
   
               </table>
 </body>
</html>    

