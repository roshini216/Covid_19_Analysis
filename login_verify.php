
<?php
include('connect.php');
   session_start();
$user = $_POST['emailid'];
$pwd  = $_POST['pswd'];

$qry   = mysqli_query($connect,"SELECT * FROM user WHERE emailid='$user' and pswd='$pwd'");

if(!$qry) {
    die("Query Failed: ". mysqli_error($connect));
} else {

    $row=mysqli_fetch_array($qry);
     echo $row['emailid'] ;
    if($user==$row['emailid'])
    {
        $_SESSION['emailid'] = $row['emailid'];
     
             if($user==$row['emailid'] && $pwd==$row['pswd'])
            { 
                    header("Location:index.php?value='$user'");         
            }
            else
           {   
           // echo 'wronggggggggggggggggggggggg'; 
                 header("Location:login.php");
            } 
    
    }
 
}   
?>
n