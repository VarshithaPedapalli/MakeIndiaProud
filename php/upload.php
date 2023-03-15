<?php 
@	include "db_conn.php";
if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['my_image'])) {



	$title = $_POST['title'];
    $content = addslashes($_POST['content']);
	$subject = addslashes($_POST['subject']);
	$img_name = $_FILES['my_image']['name'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$product_image_folder = 'uploads/'.$img_name;

	move_uploaded_file($tmp_name, $product_image_folder);

	// $db = mysqli_connect("localhost","root","","makeindiaproud");
		
	$sql = "INSERT INTO image (title, content, subject, image_url) VALUES('$title','$content','$subject','$img_name')";

	$upload = mysqli_query($conn,$sql);

	if($upload){
		header("Location: project.php");
	//    echo "Added successfully";
	}else{
	   $em = 'could not add the data';
	   header("Location: create.php");

	}
 }
else {
	header("Location: create.php");
}