<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avan Salud/Iniciar Sesión</title>

    <link rel="stylesheet" href="../CSS/iniciar_sesion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/109597d135.js" crossorigin="anonymous"></script>



</head>

<body>

    


    <div class="text-center">
        <div class="card-header">
            <nav class="navbar navbar-expand-lg bg-dark text-white">
                <div class="container-fluid justify-content-center">
                    <img src="..//Imagenes/logo-mystic.png" class="img-fluid" alt="" width=6%>
                    <font face="Ravie" size="6%">Avan Salud</font>
                    <button class="navbar-toggler  bg-warning" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">                            
                           
                            <li class="nav-item">
                                <a class="nav-link" href="iniciarAdmin.php">
                                    <font color="white" size="5%">Iniciar&nbsp;Sesión</font>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <span class="navbar-text">
                                <a class="redes  text-success text-white wsp" href="https://wa.me/message/RBEHKCU6ZUUEM1"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                               
                            </span>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <div><br></div>
        <div>
            <div class="col-3">
                <a class="principal btn btn-info" href="iniciarAdmin.php" role="button">ADMINISTRADOR</a>
                <a class="principal btn btn-info" href="iniciarEmpleado.php" role="button">EMPLEADO</a>
            </div>

            <div class="col-12 formulario">

                <form action="iniciarAdmin.php" method="POST">
                    <hr>
                    <legend class="col-12"><font face="Cooper Black" size="6%">ADMINISTRADOR</font></legend>
                    <img class="img-fluid" src="..//Imagenes/LoginCandado.png" alt=""><br>

                    <label for="">Usuario<font color="red">*</font></label><br>
                    <input type="email" name="correo_admin" id="" required><br><br>

                    <label for="">Contraseña<font color="red">*</font></label><br>
                    <input type="password" name="contra_admin" id="" required><br><br>
                    <hr>
                    <input class="bg-primary" type="submit" value="LOGIN" name="administrador">
                    <a class="principal btn btn-info" href="RegistroAdmin.php" role="button">nuevo</a>
                    

                    <br><br><br>
                </form>

                <?php

                if(isset($_POST['administrador'])){

                    $admin_correo=$_POST['correo_admin'];
                    $admin_contra=$_POST['contra_admin'];

                    if($admin_correo=='admin@avan.com' && $admin_contra=='avan123'){
                        echo '<script>window.location="paginaAdmin.php"</script>';
                    }else{
                        echo "El correo electronico o contraseña que has introducido no existe";
                    }

                }

                ?>
                
            </div>
            
        </div>

    </div>

</body>

</html>
