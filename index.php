<?php
session_start();
if (!isset($_SESSION['access_token'])) {
    header('location:login.php');
    exit();
}
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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo $_SESSION['picture']; ?>" alt="">
            </div>
            <div class="col-md-9 offset-3">
                <a href="logout.php" class="btn btn-sm btn-danger m-2">Logout</a>
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td><?php echo $_SESSION['id']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Family name</td>
                            <td><?php echo $_SESSION['familyName']; ?></td>
                        </tr>
                        <tr>
                            <td>gender</td>
                            <td><?php echo $_SESSION['gender']; ?></td>
                        </tr>
                        <tr>
                            <td>names</td>
                            <td><?php echo $_SESSION['givenName']; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>