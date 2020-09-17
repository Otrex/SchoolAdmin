<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SchoolMGT - SignUp</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="img/logo.ico.title.png" rel="icon">
  	<link href="img/logo.ico.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<style>
		.divider-text {
		position: relative;
		text-align: center;
		margin-top: 15px;
		margin-bottom: 15px;
	}
	.divider-text span {
		padding: 7px;
		font-size: 12px;
		position: relative;   
		z-index: 2;
	}
	.divider-text:after {
		content: "";
		position: absolute;
		width: 100%;
		/* border-bottom: 1px solid #ddd; */
		top: 55%;
		left: 0;
		z-index: 1;
	}

	.btn-facebook {
		background-color: #405D9D;
		color: #fff;
	}
	.btn-twitter {
		background-color: #42AEEC;
		color: #fff;
	}
	</style>
</head>
<body>
	




		<div class="container">

		<div class="bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
				<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>
			<form action="{{url('/usr/signup')}}" method = "post">

			@if ($msg = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button class = "close" data-dismiss = "alert">x</button>
                    <b> {{$msg}} </b>
                </div>
            @endif

			@if (count($errors) > 0)
				{{$errors}}
			@endif

			{{ csrf_field() }}
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
				</div>
				<input name="name" class="form-control" placeholder="Full name" type="text">
			</div> <!-- form-group// -->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				</div>
				<input name="email" class="form-control" placeholder="Email address" type="email">
			</div> <!-- form-group// -->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
				<select class="custom-select" style="max-width: 120px;">
					<option selected="">+971</option>
					<option value="1">+972</option>
					<option value="2">+198</option>
					<option value="3">+701</option>
				</select>
				<input name="" class="form-control" placeholder="Phone number" type="text">
			</div> <!-- form-group// -->
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input class="form-control" name="password" placeholder="Create password" type="password">
			</div> <!-- form-group// -->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input class="form-control" id="repass" placeholder="Repeat password" type="password">
			</div> <!-- form-group// -->                                      
			<div class="form-group">
				<button type="button" onclick="isSimilar(this)" class="btn btn-primary btn-block"> Create Account  </button>

				<script>
					var password = document.querySelector("[name='password']"),
						repass = document.querySelector("#repass");

					function isSimilar(x){
						if (password.value === repass.value)
						{
							x.type = "submit"
							x.innerHTML = "Click Once Again To Submit";
							x.style.backgroundColor = "yellow"
						} else {
							x.innerHTML = "Password is not the same with the retyped";
							x.style.backgroundColor = "red"
							setTimeout(() => {
								x.style.backgroundColor = "blue"
							}, 2000);
						}
					}

				</script>
			</div> <!-- form-group// -->      
			<p class="text-center">Have an account? <a href="login">Log In</a> </p>                                                                 
		</form>
		</article>
		</div> <!-- card.// -->

		</div> 
		<!--container end.//-->

		<br><br>
	</body>
</html>