<?php
    function do_login($username, $password){
        //cek kondisi jika username dan password salah
        if($username != 'admin' || $password != 'admin'){
            header("location: tugas.php?error=wrong");
        }
        // cek kondisi jika username dan password benar
        if($username == 'admin' && $_POST['password'] == 'admin'){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            header("location: beranda.php");

            // echo "<script>
            // alert('Login Berhasil!!!')
            // </script>";
            // echo "<h1><a href='logout.php'>Logout!</a></h1>";
        }
    }

    function check_login(){
        // cek kondisi login session
        if(!isset($_SESSION['username'])){
            header("location: tugas.php");
        }
    }
?>