<?php
    session_start();
    if(isset($_SESSION["username"])){
        // echo "<script>
        //     alert('Login Berhasil!!!')
        // </script>";
        // echo "<h1><a href='logout.php'>Logout!</a></h1>";
        header("location: beranda.php");
    }
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == "wrong"){
                                    echo '<h3>Username dan Password Salah</h3>';
                                }
                            }
                            if(isset($_GET['notif'])){
                                if($_GET['notif'] == "logout"){
                                    echo "<h3>Berhasil logout!</h3>";
                                }
                            }

                            if(isset($_POST['submit'])){
                                echo do_login($_POST['username'], $_POST['password']);
                            }   
                        ?>
        <div>
            <div id="particles-js">
                    <div class="box">
                        <h2>Login</h2>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="inputBox">
                                <input type="text" name="username" id="nama">
                                <label for="">Username</label>
                            </div>
                            <div class="inputBox">
                                    <input type="password" name="password" id="email">
                                    <label for="">Password</label>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="particles.js"></script>
            <script type="text/javascript" src="app.js"></script>
    </div>
    </section>
</body>
</html>