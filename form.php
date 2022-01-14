<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>jQuery Second Page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="jquery-ui.min.css">
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
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
					<label for="password">Confirm Password: </label>
					<input type="password" name="password" id="con_password" class="form-control">
					<div id="con_pwd_id"></div>
				</div>
				<div class="form-group">
					<label for="dob">Date of Birth: </label>
					<input type="text" name="dob" id="datepicker" class="form-control">
					<div id="con_pwd_id"></div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" id="submit">
				</div>
			</form>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#datepicker').datepicker({
					dateFormat:'dd-mm-yy',
					changeMonth: true,
					changeYear: true,
					maxDate: '2Y',		// this will provide only 2 year ahead date from the submit time, respectly we can set W for week, 
					minDate: '-3M'		// this will provide only 3 month before date from the submit time
				});
				$('#submit').click(function(){
					var username = $('#username').val();
					var password = $('#password').val();
					var con_password = $('#con_password').val();
					if (username == ''){
						$('#user_id').html('** The username must be filled.');
						$('#user_id').css('color','red');
						return false;
					}
					if((username.length <= 2) || (username.length >= 10)){
						$('#user_id').html('** The username length must between 3 to 10');
						$('#user_id').css('color','red');
						return false;
					}

					if (password == ''){
						$('#pwd_id').html('** The password must be filled.');
						$('#pwd_id').css('color','red');
						return false;
					}
					if ((password.length <= 2) || (password.length >= 10)){
						$('#pwd_id').html('** The password lenght must between 3 to 10');
						$('#pwd_id').css('color','red');
						return false;
					}
					
					if (con_password != password){
						$('#con_pwd_id').html('** password are not matching');
						$('#con_pwd_id').css('color','red');
						return false;
						}
				});
			});
		</script>
	</div>
	
</body>
</html>