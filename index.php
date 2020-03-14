<!DOCTYPE html>
<html>
<head>
	<title>SPA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<!-- <link href="sweetalert.css" type="text/css" rel="stylesheet"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" src="sweetalert.js"></script> -->
	
</head>
<body>

	<h1 class="text-center">Single Page Application</h1>

    <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<h2 class="form-signin-heading">Upoad Files</h2>
		<form id="uploadForm" enctype="multipart/form-data">	
			<div class="form-group">
				<label>Choose File:</label>
				<input class="form-control" type="file" name="files[]" id="fileInput" multiple >	
			</div>
			<div class="form-group">
				<button id="submit" type="submit" name="submit" class="btn btn-primary mb-2">UPLOAD</button>																																																		
				<!-- <input class="form-control-file" id="submit" type="submit" name="submit" value="UPLOAD"/> -->
			</div>
		</form>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<div class="progress">
  				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">

  				</div>
			</div>
			<div id="uploadStatus"></div>
			<div class="gallery"></div>
		</div>
	</div>
	</div>
	

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="index.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>

