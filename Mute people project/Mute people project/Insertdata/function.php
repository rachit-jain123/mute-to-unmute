<?php
//including the database connection file
include("config.php");
if(isset($_POST['Submit'])) {    
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];
        
// checking empty fields
if(empty($pname) || empty($pcode) || empty($pprice)) {                
if(empty($pname)) {
echo "<font >Product Name field is empty.</font><br>";
}
if(empty($pcode)) {
echo "<font >Product Code field is empty.</font><br>";
}
if(empty($pprice)) {
echo "<font >Product Price  field is empty.</font><br>";
}
//link to the previous page
 echo "<br><font>Go Back</font>";
 } else { 
// if all the fields are filled (not empty)             
//insert data to database
$result = mysqli_query($cser, "INSERT INTO crud2(pname,pcode,pprice) VALUES('$pname','$pcode','$pprice')");
if($result)
        {
            header("location:index.php");
        }else{
            echo "Failed";
        }
//display success message
// echo "<font>Data added successfully.</font>";
        
}
}
?>