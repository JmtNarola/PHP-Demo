<?php
include_once 'include/config.php';
// if (!empty($_SESSION['user'])) {
//     header('location: Dashboard.php');
// }
//  create('users',['name','email','phone_number','password','status'],['Jeet','jeet@narola.email','7631331693',password_hash('1234',PASSWORD_DEFAULT),0]);


if ($_POST) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    do_login($email, $password);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <div class="jumbotron">
            <?php if (!empty($_GET['message'])) { ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $_GET['message'] ?>.
                </div>
            <?php } ?>
            <h1 class="display-4 mx-3">Login Here</h2>
                <hr />
                <div class="col-md-6">
                    <form action="index.php" method="post">
                        <div class="form-group ">
                            <label for="Email1">Email <span style="color:red;">*</span> </label>
                            <input type="email" name="email" class="form-control" id="email_id"
                                placeholder="example@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="Password1">Password <span style="color:red;">*</span> </label>
                            <input type="password" name="password" class="form-control" id="user_password_id"
                                placeholder="Password" required>
                        </div>
                        <div class="row">
                            <div class="row col-md-6 mx-1">
                                <button type="submit" class="btn btn-outline-primary">Login</button>
                            </div>
                            <div class="row col-md-6">
                                <span>Don't have an account <a href="<?php echo BASE_URL; ?>userModule/signup.php">Sign
                                        up</a> </span>
                            </div>
                        </div>

                    </form>
                </div>
        </div>
    </div>
</body>

</html>