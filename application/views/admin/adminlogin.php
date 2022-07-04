
	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!--=== FAVICON ===-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>css/img/favicon.ico" type="image/x-icon">

    <!--=== CSS ===-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin-login-styles.css" />

    <!--=== FONTS ===-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Spline+Sans+Mono:wght@400;500;600;700&family=Spline+Sans:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <title>Admin Log In</title>
</head>

<body>
    <div class="grid-container">
        <div class="left-panel">
            <div class="upper-content">
                <h3>(Sabay)</h3>
                <h1>Keeping trains on schedule</h1>
            </div>

            <div class="lower-content">
                <p>Art by Coen Pohl</p>
            </div>
        </div>

        <div class="form-container">
            <div class="logInForm">
                <form method="POST" class="">
                    <h3>(Sabay)</h3>
                    <h2>Admin Log In</h2>

                    <div class="input-field">
                        <input type="text" name="adminusername" placeholder="Username" />
                    </div>

                    <div class="input-field">
                        <input type="password" name="adminpassword" placeholder="Password" />
                    </div>

                    <div class="submit-field">
                        <input type="submit" name="login" value="login" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>