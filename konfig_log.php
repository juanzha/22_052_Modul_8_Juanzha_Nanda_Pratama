
<?php 
//mengakses config.php
include 'config.php';
//
$user = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($con,"SELECT * FROM user WHERE username ='$user' and pass = '$pass'");
$cek = mysqli_num_rows ($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login successful";
    // echo "berhasil login successful";
    header ("location: Juanzha_Nanda_pratama_Modul4.php");
    // echo "
    //     <script>
    //         alert('Login successful');
    //         document.location.href = 'indexdua.php';
    //     </script>
    //     ";
    // header("location: index.php");
}else {
    echo "
        <script>
            alert('Login gagal');
            document.location.href = 'Login.php';
        </script>
        ";
    // header("location: index.php");
}

?>