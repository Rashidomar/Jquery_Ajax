<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</head>
<body>
	<a href="index.html">About Page</a>
	<h1>Welcome to Home Page</h1>
	<div id="content">

	</div>



<form id="uploadForm" enctype="multipart/form-data">
	<label>Choose File:</label>
	<div class="form-group">

	</div>
    <input class="input-file"																																																				type="file" name="files[]" id="fileInput" multiple >
    <input id="submit" type="submit" name="submit" value="UPLOAD"/>
</form>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">

  </div>
</div>
<div id="uploadStatus"></div>
<div class="gallery"></div>

		<!-- File upload form -->
<!-- <form action="" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form> -->
		<!-- Display upload status -->
		<!-- <div class="progress">
			<div class="progress-bar"></div>
		</div>
		<div id="uploadStatus"></div>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
			  <span class="sr-only">0% Complete</span>
			</div>
		  </div> -->
</body>
</html>