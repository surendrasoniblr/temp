<?php
include ("include/session.php");
?>
<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>DOW	</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

         
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
                         <?php



if($form -> num_errors > 0) {



	echo "<font size=\"2\" color=\"#ff0000\">" . $form -> num_errors . " error(s) found</font>";



}
?>
            <form action="process.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="User ID"/> <?php echo $form -> error("user");?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password"/> <?php echo $form -> error("pass");?>
                    </div>          
				<input type="hidden" name="sublogin" value="1">
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  

                </div>
            </form>

        </div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        


    </body>
</html>
