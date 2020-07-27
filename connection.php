<html>
<head>
    <style>
         body
         {
            margin:100px;
            padding: 100px;
            font-family:sans-serif;
            background-size: cover;
            background-image: url(2.jpg);
         }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="fdptrial";
$email = $_POST['email'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $durFrom=$_POST['durFrom'];
 $durTo=$_POST['durTo'];
 $organizedBy=$_POST['organizedBy'];
 $certificate=$_POST['certificate'];  
    
//Description:This code is an overall code which includes creating connection with the database and php,create database,create table in database,to delete or drop the table,to delete the record in the table, to insert the data inside the table,to modify the table header and change its value......so to execute this code...un comment the part which u want..i had commented all the daata by default....u can change the name of the database , table,query according to ur need

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected Successfully!!<br>";
// Create database
/*$sql = "CREATE DATABASE ContactUs";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*///i put this code in comment bcoz i had already created this database ContactUs....So no need to keep the code...so i put that in comment

//Inserting table in the database
/*try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE fdp1 (
    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    facultyname VARCHAR(255) NOT NULL,
    fdpTitle VARCHAR(255) NOT NULL,
    durFrom VARCHAR(255) NOT NULL,
    durTo VARCHAR(255) NOT NULL,
    organizedBy VARCHAR(255) NOT NULL,
    certificates VARCHAR(255) NOT NULL
    
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;*/
//i put this code in comment bcoz i had already created this table contactinfo....So no need to keep the code...so i put that in comment

// sql to delete a table
   /* $sql = "DROP TABLE contactinfo";
        mysqli_select_db( $conn , 'ContactUs' );
         $retval = mysqli_query($conn,$sql);
         
         if(! $retval ) {
            die('Could not delete table: ' . mysqli_error($conn));
         }
         echo "Table deleted successfully\n";
         mysqli_close($conn);*/
//i put this code in comment bcoz i had already deleted/dropped this table contactinfo..so no need to delete it again..So no need to keep the code...so i put that in comment

//to insert data in the table, i had connected this code to contact.php page where i am taking input from the user...so here i want to insert that user's data into my database direcctly

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO fdp1 (email,facultyname,fdpTitle,durFrom,durTo,organizedBy,certificates)
    VALUES ('$email','$fname','$lname','$durFrom','$durTo','$organizedBy','$certificate')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully!!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

//to delete a record from the table
/*$sql = "UPDATE contactsinfo SET firstname='kishor' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}*/

//to modify table heading/column name
/*$sql = "ALTER TABLE contactsinfo MODIFY COLUMN query varchar(100);";
if ($conn->query($sql) === TRUE) {
    echo "table column updated successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}*/

/*$sql = "DROP TABLE contactinfo";

if ($conn->query($sql) === TRUE) {
  echo "table dropped successfully";
} else {
  echo "Error updating record: " . $conn->error;
}*/

?>
<br>
<a href="logout.php">Logout</a>
</body>
</html>