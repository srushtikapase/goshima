<?php 
	include("connection.php");

	if(isset($_POST['add_image']))
	{
 
	  $name = $_FILES['file']['name'];
	  $target_dir = "upload/";
	  $target_file = $target_dir . basename($_FILES["file"]["name"]);
	
	  // Select file type
	  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	  // Valid file extensions
	  $extensions_arr = array("jpg","jpeg","png","gif");
	
	  // Check extension
	  if(in_array($imageFileType,$extensions_arr))
	  {
		 // Upload file
		 if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name))
		 {
			// Insert record
			$query = "insert into frontpanel(imagepath,discription,expdate) values('".$name."','$_POST[discription]','$_POST[expdate]')";
			mysqli_query($con,$query);
			
			header('location:add_images.php?success=1');
		 }
	
	  }
	  
 
	}
	elseif(isset($_POST['add_event']))
	{
		
	  $imagename = $_FILES['imagefile']['name'];
	  $target_dir = "event/";
	  $target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
	 
	 
	  // Select file type
	  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	  // Valid file extensions
	  $extensions_arr = array("jpg","jpeg","png","gif");
	
	  $filename = $_FILES['linkfile']['name'];
	  $target_file2 = $target_dir . basename($_FILES["linkfile"]["name"]);
	  // Check extension
	  if(in_array($imageFileType,$extensions_arr))
	  {
		 // Upload image file
		 if(move_uploaded_file($_FILES['imagefile']['tmp_name'],$target_dir.$imagename))
		 {
		 	move_uploaded_file($_FILES['linkfile']['tmp_name'],$target_dir.$filename);
			// Insert record
			$query = "insert into events(title,description, imagepath,link,expdate) values('$_POST[title]','$_POST[discription]','$imagename','$filename','$_POST[expdate]')";
			//echo $query;
			
			mysqli_query($con,$query);
			
			header('location:add_events.php?success=1');
		 }
	
	  }
	  
	
	}
	elseif(isset($_POST['add_project']))
	{
		
	  $imagename = $_FILES['imagefile']['name'];
	  $target_dir = "project/";
	  $target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
	 
	 
	  // Select file type
	  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	  // Valid file extensions
	  $extensions_arr = array("jpg","jpeg","png","gif");
	
	  $filename = $_FILES['linkfile']['name'];
	  $target_file2 = $target_dir . basename($_FILES["linkfile"]["name"]);
	  // Check extension
	  if(in_array($imageFileType,$extensions_arr))
	  {
		 // Upload image file
		 if(move_uploaded_file($_FILES['imagefile']['tmp_name'],$target_dir.$imagename))
		 {
		 	move_uploaded_file($_FILES['linkfile']['tmp_name'],$target_dir.$filename);
			// Insert record
			$query = "insert into project(title,progress,description, imagepath,link) values('$_POST[title]','$_POST[progress]','$_POST[description]','$imagename','$filename')";
			echo $query;
			
			mysqli_query($con,$query);
			
			header('location:add_project.php?success=1');
		 }
	
	  }
	  
	
	}
?>
