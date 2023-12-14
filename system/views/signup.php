<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('/assets/css/reset.css')?>">
    <link rel="stylesheet" href="<?php echo url('/assets/css/classes.css')?>">
    <link rel="stylesheet" href="<?php echo url('/assets/css/signup.css')?>">
    <script src="<?php echo url('/assets/js/js.js')?>"></script> 
    <title>To Do List</title>
</head>
<body>
    <?php include (path('views') . '/core/header.php'); ?>
    <section class="login-form">
        <div class="container">
            <div class="std-form-wrapper">
                <div class="text">
                    <h2 class="content-title">To Do List</h2>
                    <p class="content-description">Streamlined productivity, one task at a time.<br/>Sign in to manage your workflow.</p>
                </div>
                <form class="std-form sign-in-form" action="<?php echo url('/user/signup/process')?>" method="POST">
                    <div class="form-row">
                        <label class="form-label" for="username">Username</label>     
                        <input class="form-input" type="text" name="username" id="username">                                   
                    </div>
                    <div class="form-row">
                        <label class="form-label" for="username">Email</label>     
                        <input class="form-input" type="email" name="email" id="email">                                   
                    </div>
                    <div class="form-row">
                        <label class="form-label" for="password">Password</label> 
                        <input class="form-input" type="password" name="password" id="password">                                       
                    </div>
                    <div class="form-row">
                        <label class="form-label" for="password">Confirm your password</label> 
                        <input class="form-input" type="password" name="confirm_password" id="confirm-passowrd">                                       
                    </div>
                    <div class="form-row submit-row">
                        <button type="submit" class="form-submit">Sign Up</button>
                        <a class="create-account" href="<?php echo url()?>">Sign In</a>
                    </div>
                </form class="std-form">
                <p class="accounts-counter"><span>999</span> people are using To Do List!</p>
            </div>
        </div>
    </section>
    <?php include (path('views') . '/core/footer.php'); ?>
</body>
</html>