<?php
session_start();
$name = 'Joel';
$password = 'joel';
$namebtn = $_POST['name'];
$passwordbtn = $_POST['password'];

if ($name === $namebtn && $password === $passwordbtn) {
    $_SESSION['usuario'] = $name;
    header('Location: /onlineShop/views/auth/logged.php');
    exit();
} else { ?>
<script>
    alert('usuario o contraseña no coincide con los registrados');
    window.location = "/onlineShop"
</script>
<?php
    exit();
}

?>