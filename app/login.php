<!-- @format -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://fonts.googleapis.com/css?family=Inter&display=swap"
			rel="stylesheet"
		/>
		<link href="../css/login.css" rel="stylesheet" />
		<title>Halaman Login</title>
	</head>
	<body>
		<div class="container">
			<div class="top"></div>
			<main class="content-container">
				<div class="form-wrapper">
					<div class="login-wrapper">
						<form action="verifikasi_login.php" method="post">
							<h2>Sign In</h2>
							<input type="text" placeholder="Username" name="username" required>
							<input type="password" placeholder="Password" name="password" required>
							<!-- <div class="choice-wrapper">
								<div class="checkbox-wrapper">
									<input type="checkbox" name="remember" id="remember">
									<label for="remember">Remember Me</label>
								</div>
								<a href="#" class="forgot-pass">Forgot password?</a>
							</div> -->
							<button type="submit" name="masuk">Masuk</button>
						</form>
						<!-- <div class="sign-up">Don't have an account?<a href=""> Sign Up</a></div> -->
					</div>
				</div>
			</main>
			<div class="bottom"></div>
		</div>
	</body>
</html>
