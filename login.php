<?php 
require_once 'config.php';
if (isset($_SESSION['access_token'])) {
    header('location:index.php');
     exit();
}
// get auth url from Google
$loginUrl = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3" align="center">
                <img src="images/logo.png" alt="">
                <form method="post">
                    <h2>Login with Google API</h2>
                    <input type="email" name="email" placeholder="Email" class="form-control m-3" id="">
                    <input type="password" name="password" placeholder="password" class="form-control m-3" id="">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="button" onclick="window.location='<?php echo $loginUrl;?>'" class="btn btn-danger">Login with Google</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>