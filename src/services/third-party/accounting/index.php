<?php
require_once '../../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Accounting</title>
	<?php
		include '../../../includes/php/head.php';
	?>
</head>
<body>
	<div id="container">
		<?php
			include '../../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Accounting</h1>
	        
            <br>
            <style type="text/css">
            a.img:hover {
                background: none;
                box-shadow: none;
            }
            </style>
            <div class="logos column">
                <div class="medium-4 small-12 columns">
                    <a class="img" href="">
                        <img src="services/third-party/accounting/img/simple-invoices.png">
                    </a>
                </div>
                <div class="medium-4 small-12 columns">
                    <a class="img" href="">
                        <img src="services/third-party/accounting/img/invoice-ninja.png">
                    </a>
                </div>
            </div>
      	</div>

      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<?php include '../../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
