<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>jQuery Second Page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body><h1 class="text-center font-weight-bold bg-warning">Second Page Of jQuery</h1>
	<div class="container">
		<h3>Form Validation</h3>
		<div class="ml-0 mr-0 col-6">
			<form>
				<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" id="username" class="form-control">
					<div id="user_id"></div>
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password" class="form-control">
					<div id="pwd_id"></div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" id="submit">
				</div>
			</form>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#submit').click(function(){
					var username = $('#username').val();

					if (username == ''){
						$('#user_id').html('** The username must be filled.');
						$('#user_id').css('color','red');
						return false;
					}else
					if((username.length <= 2) || (username.length => 10)){
						$('#user_id').html('** The username length must between 3 to 10');
						$('#user_id').css('color','red');
						return false;
					}
				});
			});
		</script>
	</div>
	
</body>
</html>