<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
    <style>
        
    body{

        background-color: black;
        color: white;
        }
 

    </style>
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <br>
        
    <h1>REGISTER HERE</h1>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         <table>
             <tr>
                 <td><label> <strong>FIRST NAME:</strong></label>
                    <input type="text"name="FName"value=""><br>
                    <br>
                    <br></td>
             </tr>
             <tr>
                 <td><label> <strong>LAST NAME:</strong></label>
                    <input type="text"name="LName"value=""><br>
                    <br><br>

                 </td>
             </tr>
             <tr>
                 <td>
                    
                    <label> <strong>CONTACT NUMBER:</strong></label>
                    <input type="number"name="contact"value=""><br><br><br>
                 </td>
             </tr>
             <tr>
              <td><label> <strong>DATE OF BIRTH:</strong></label>
                <input type="date"name="dob"value=""><br><br>
                </td>
             </tr>
             <tr>
                 <td>
                    
                    <p>
                        <label> <strong>GENDER:</strong></label>

                        <input type="radio" name="gender" value="0">MALE
                        <input type="radio" name="gender" value="1">FEMALE
                        </p>
                        <br><br>
                 </td>



                        <tr>
                            <td>
                                <label> <strong>EMAIL ID:</strong></label>
                                <input type="email"name="emailid"value=""><br>
                                <br><br>
                              
 
                            </td>
                        
               </tr>
               
             <tr>
                 <td>
                     <label><strong>PASSWORD:</strong></label>
                     <input type="text"name="Pwd"value=""><br><br><br>
                 </td>
             </tr>
             <tr>
               <td>
                   <label><strong>CONFIRM PASSWORD:</strong></label>
                   <input type="text"name=""value=""><br><br><br>
               </td>
             </tr>
             
             </table>

         <input type="submit"name="submit" value="REGISTER">

        

     </form>
    </center>

 <?php

include('connect.php'); 

if( isset($_POST['submit'])) 
{
    
$fname=$_POST['FName']; 
$lname=$_POST['LName'];
$contact=$_POST['contact'];

$dob = $_POST['dob'];
$gender = $_POST['gender'] ;
$email = $_POST['emailid'];      

$pwd=$_POST['Pwd'];

$query=" INSERT INTO user values('$fname','$lname','$contact','$dob',$gender , '$email' ,'$pwd' ,default) " ;  
$result=mysqli_query($connect,$query);  

if ( false===$result ) {
  printf("error: %s\n", mysqli_error($connect));
}
else {
  ?>
  <script type="text/javascript"> 
  alert('Registration done!') ;
    </script>
  <?php
  header("Location:login.php"); 
}
}
mysqli_close($connect);
?>
</body>
</html>