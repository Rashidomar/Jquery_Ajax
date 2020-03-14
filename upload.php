<?php 
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "test";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//if(isset($_POST['submit'])){
// if(!empty($_FILES['files'])){

$targetDir = "uploads/";

//$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

// Count # of uploaded files in array
$total = count($_FILES['files']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['files']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
	$newFilePath = $targetDir.$_FILES['files']['name'][$i];
	$fileName = $_FILES['files']['name'][$i]; 

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

		$q = "INSERT INTO `images`(`id`, `file_name`, `uploaded_on`) VALUES ('','$fileName',NOW())";

		$insert = $db->query($q);

		if($insert){

		}else{
			echo $db->error;
		}

    }
  }
}

$qu = "SELECT * FROM images";
$result = $db->query($qu);

    // Generate gallery view of the images
    if($result){
        echo '<ul>';
        while($row = $result->fetch_assoc()){
            echo '<li><img src="uploads/'.$row['file_name'].'" alt=""></li>';
        }
        echo '</ul>';
     }

// }

//}

?>