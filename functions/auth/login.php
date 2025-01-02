<?php
session_start();
include('../../shared/header.php');

$name = 'max';
$password = 'max';
$namebtn = $_POST['name'];
$passwordbtn = $_POST['password'];

if ($name === $namebtn && $password === $passwordbtn) { 
    $_SESSION['usuario'] = $name;
    ?>
    <script>
        window.onload = function() {
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "Has iniciado session correctamente",
                showConfirmButton: false,
                timer: 1000
            }).then(() => {
                window.location = "/onlineShop/views/auth/logged.php"; // Redirigir después de la alerta
            });
        };
    </script>
    <?php
} else { ?>
    <script>
        // Esperar que el DOM esté completamente cargado antes de ejecutar el script
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Usuario o contraseña no coincide con los registrados',
                confirmButtonText: 'Regresar'
            }).then(() => {
                window.location = "/onlineShop"; // Redirigir después de la alerta
            });
        };
    </script>
<?php
}
?>
