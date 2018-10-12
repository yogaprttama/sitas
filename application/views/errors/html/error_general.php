<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SITAS | Error</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<style>
	  html, body {
	    background-color: #fff;
	    color: #636b6f;
	    font-family: 'Raleway', sans-serif;
	    font-weight: 100;
	    height: 100vh;
	    margin: 0
	  }

	  .full-height {
      height: 100vh
	  }

	  .flex-center {
	    align-items: center;
	    display: flex;
	    justify-content: center
	  }

	  .position-ref {
      position: relative
	  }

	  .content {
      text-align: center
	  }

	  .title {
      font-size: 72px
	  }

	  .body {
      font-size: 32px
	  }

	  .m-b-md {
      margin-bottom: 30px
	  }
	</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				<?php echo $heading; ?>
			</div>
			<div class="body">
				<?php echo $message; ?>					
			</div>
		</div>
	</div>
</body>
</html>