<?php
 session_start();
$conn = mysqli_connect("localhost","root","","farmer");

if(isset($_POST['save_stud_image']))
{
    $name = $_POST['stud_name'];
    $address= $_POST['stud_addr'];
    $phone= $_POST['stud_phone'];
    $residue= $_POST['residue'];
    $crop= $_POST['stud_crop'];
    $quan= $_FILES['stud_quan'];
    $image= $_FILES['stud_image']['name'];

    $query = "INSERT INTO form (stud_name,stud_addr,stud_phone,residue,stud_crop,stud_quan,stud_image) VALUES ('$name','$address','$phone','$residue','$crop','$quan','$image')";
    $query_run=mysqli_query($conn ,$query);
    

  if ($query_run)
   { 
  	move_uploaded_file($_FILES["stud_image"]["tmp_name"], "upload/".$_FILES["stud_image"]["name"]);
  	$_SESSION["status"] = "Form Submitted Successfully";
  	header('Location: rrr.php');
  }
  else
  {
	$_SESSION["status"] = "Image Not Inserted.!";
	header('Location: rrr.php');
   }
}
?>