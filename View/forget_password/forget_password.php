<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget my password</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="forget_password.css">
</head>
<body>
<div class="header">
        <div id="logo" >
            <h1 class="title">
                <strong>facebook</strong>
            </h1>
        </div>
        <form>
            <div id="form1" >
            Email or Phone
                <br>
                <input type="email" class="input_login"  id="email_login" placeholder="email" />
                <br>
            </div>
    
            <div id="form2">Password
                <br>
                <input type="password"  class="input_login"  id="password_login" placeholder="Mot de passe" />
                <br>
                <a href="./forget_password.php" target="_self"> Forgot account? </a>
            </div>
            <button type="button" id="submit_login">connexion</button>
        </form>

        
       

    </div>
    <div class="jumbotron">
    <div class="card card-forget-password" >
            <div class="card-header">
                <h2>Find Your Account</h2>
            </div>
            <div class="card-body">
                <p>Please enter your email or phone number to search for your account.</p>
                <input type="text" placeholder="Email or Phone" id="input_serch_email">
            </div>
            <div class="card-footer">
                <button type="button" id="serch_email">Serach</button>
                <button type="button">Cancel</button>
            </div>


        </div>
    </div>
    
    <script src="../../js/jquery.js"></script>
    <script src="./forget_password.js"></script>
</body>
</html>