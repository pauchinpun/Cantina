<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link type="text/css" rel="stylesheet" href="client/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="client/css/header.css">
        <link type="text/css" rel="stylesheet" href="client/css/footer.css">
        <link type="text/css" rel="stylesheet" href="client/css/index.css">
        <title>Landing page</title>
    </head>   
     
    <body>
        <?php include("client/header.php") ?>

        <!-- Carrousel de fotos -->
        <div class="carousel">
            <div class="slider">
                <ul>
                    <li><img class="foto" src="./client/img/foto1.png"></li>
                    <li><img class="foto" src="./client/img/foto3.PNG"></li>
                    <li><img class="foto" src="./client/img/foto5.png"></li>
                    <li><img class="foto" src="./client/img/foto7.png"></li>
                </ul>
            </div> 
        </div>
        
        <!-- Novetats i admin -->
        <div class="more">
            <div class="menu">
                <a href="./client/menu.php" class="btn boton">VEURE MENÚ</a>
            </div>

            <div class="admin">
                <div class="admin-button">
                    <img class="imgg" src="./client/img/admin.png">
                    <h4>Ets administrador?</h4>
                </div>

                <div class="admin2">
                    <a href="./administrador/admin.php" class="admin_btn boton">Entrar com admin</a>
                </div>
            </div>
        </div>

        <?php include ("client/footer.php")?>
        <script>
            if (document.cookie.split(';').some((item) => item.trim().startsWith('comanda='))) {
                Swal.fire({
                    position: 'center-center',
                    icon: 'warning',
                    title: 'Avui ja has fet una comanda...',
                    showConfirmButton: false,
                    timer: 2500
                })
            }
        </script>
    </body>
</html>

