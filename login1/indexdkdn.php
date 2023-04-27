<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<script	src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
		</script>
    	<link rel="stylesheet" href="./dkdn.css" />
		<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    	<script src="./validation.js" defer></script>
    	<title>Sign in & Sign up Form</title>
  	</head>

  	<body>
    <div class="container">
      	<div class="forms-container">
        	<div class="signin-signup">
          		<form class="sign-in-form" method="post" novalidation>
				<?php
					$is_invalid = false;
					if ($_SERVER["REQUEST_METHOD"] === "POST") {
    					$mysqli = require __DIR__ . "/database.php";
    					$sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));
    					$result = $mysqli->query($sql);
    					$user = $result->fetch_assoc();
    				if ($user) {
        				if (password_verify($_POST["password"], $user["password_hash"])) {
            				session_start();
            				session_regenerate_id();
            				$_SESSION["user_id"] = $user["id"];
            				header("Location: index.php");
            				exit;
        					}
    					}
    				$is_invalid = true;
					}
				?>
            		<h2 class="title">Sign in</h2>
					<?php if ($is_invalid): ?>
        				<em>Không thể đăng nhập</em>
    				<?php endif; ?>
            		<div class="input-field">
              			<i class="fas fa-envelope"></i>
              			<input type="email" id="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"/>
            		</div>
            		<div class="input-field">
              			<i class="fas fa-lock"></i>
              			<input type="password" id="password" name="password" placeholder="Password" />
            		</div>
		
            		<input type="submit" value="Login" class="btn solid" />
            		<p class="social-text">Bạn có thể đăng nhập bằng các cách dưới đây</p>
            		<div class="social-media">
              			<a href="#" class="social-icon">
                			<i class="fab fa-facebook-f"></i>
              			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-twitter"></i>
              			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-google"></i>
              			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-linkedin-in"></i>
              			</a>
            		</div>
          		</form>

          		<form action="textdky.php" method="post" id="signup" class="sign-up-form">
            		<h2 class="title">Sign up</h2>
           			<div class="input-field">
              			<i class="fas fa-user"></i>
              			<input type="text" id="name" name="name" placeholder="Username" />
            		</div>
            		<div class="input-field">
              			<i class="fas fa-envelope"></i>
              			<input type="email" id="email" name="email" placeholder="Email" />
            		</div>
            		<div class="input-field">
            			<i class="fas fa-lock"></i>
            			<input type="password" id="password" name="password" placeholder="Password" />
            		</div>
					<div class="input-field">
            			<i class="fas fa-lock"></i>
            			<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" />
            		</div>
            		<input type="submit" class="btn" value="Sign up" />
            		<p class="social-text">Or Sign up with social platforms</p>
            		<div class="social-media">
              			<a href="#" class="social-icon">
                			<i class="fab fa-facebook-f"></i>
              			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-twitter"></i>
             			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-google"></i>
              			</a>
              			<a href="#" class="social-icon">
                			<i class="fab fa-linkedin-in"></i>
              			</a>
            		</div>
          		</form>
        	</div>
      	</div>

      	<div class="panels-container">
        	<div class="panel left-panel">
          		<div class="content">
            		<h3>Bạn là thành viên mới? </h3>
            		<p>
              			Đăng ký tài khoản và trải nghiệm trang web của chúng tôi tại đây
            		</p>
            		<button class="btn transparent" id="sign-up-btn"> Sign up </button>
          		</div>
          		<img src="./img/dnhap.svg" class="image" alt="" />
        	</div>
        	<div class="panel right-panel">
          		<div class="content">
            		<h3>Bạn đã có tài khoản rồi? </h3>
            		<p>
              			Đăng nhập và trải nghiệm trang web của chúng tôi tại đây.
            		</p>
            		<button class="btn transparent" id="sign-in-btn"> Sign in </button>
          		</div>
          		<img src="./img/dky.svg" class="image" alt="" />
        	</div>
      	</div>
    </div>

		<script src="trans.js"></script>
  	</body>
</html>