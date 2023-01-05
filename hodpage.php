<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Enter Admission Number</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>


<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">SEARCH STUDENT </h4>
							<form method="POST"  action="hoddisplay.php" >
								<div class="form-group">
									
                                <label for="adno">Enter Admission Number</label>
									<input id="userid" type="int" class="form-control" name="userid" value="" required autofocus>
									
									</div>
								</div>
								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="hodlogin">
										Search
									</button>
								</div>
								
							</form>
						</div>
					</div>
					<div class="footer">
						
					</div>
				</div>
			</div>
		</div>
	</section>
