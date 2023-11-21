<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/classes.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/js.js"></script> 
    <title>To Do List</title>
</head>
<body>
    <?php include (path('views') . '/core/header.php'); ?>
    <section class="login-form">
        <div class="container">
            <div class="wrapper">
                <div class="text">
                    <h2 class="content-title">To Do List</h2>
                    <p class="content-description">Streamlined productivity, one task at a time.<br/>Log in to manage your workflow.</p>
                </div>
                <form class="std-form sign-in-form" action="user/signin" method="POST">
                    <div class="form-row">
                        <label class="form-label" for="username">Username</label>     
                        <input class="form-input" type="text" name="username" id="username">                                   
                    </div>
                    <div class="form-row">
                        <label class="form-label" for="password">Password</label> 
                        <input class="form-input" type="password" name="password" id="password">                                       
                    </div>
                    <div class="form-row">
                        <button type="submit" class="form-submit">Log In</button>
                    </div>
                </form class="std-form">
                <p class="accounts-counter"><span>999</span> people are using To Do List!</p>
            </div>
        </div>
    </section>
    <?php include (path('views') . '/core/footer.php'); ?>
</body>
</html>