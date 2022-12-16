<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avan Salud/Iniciar Sesión</title>

    <link rel="stylesheet" href="../CSS/RegistroEmpleado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/109597d135.js" crossorigin="anonymous"></script>

    <script src="../JS/RegistroEmpleado.js"></script>

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
                                <a class="nav-link navegar" href="iniciarAdmin.php">
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
                        
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="d-flex">
            
            <div id="sidebar-container" class="bg-primary">

                <div class="logo">
                    <h4 class="text-light font-weight-bold" >Administrador</h4>
                </div>
                <div class="menu" style="text-align: left;">
                    <a href="paginaAdmin.php" class="d-block text-light p-4 lateral"><i class="fa-solid fa-gem mr-2 lead"></i> Administradores</a>
                    <a href="paginaEmpleado.php" class="d-block text-light p-4 lateral"><i class="fa-solid fa-person-circle-plus mr-2 lead"></i> Empleados</a>
                    <a href="paginaEspecialidades.php" class="d-block text-light p-4 lateral"><i class="fa-solid fa-hand-holding-heart mr-2 lead"></i> Especialidades</a>
                    <a href="paginaCitas.php" class="d-block text-light p-4 lateral"><i class="fa-solid fa-calendar-plus mr-2 lead"></i> Citas</a>
                </div>
            </div>

        <div class="col-12">

        <form action="" class="col-12 formulario">
            <h1 style="margin-left: 0%;" align="center"><font face="Arial">REGISTRO DE USUARIO</font></h1>
            <hr>
            <label  for="">DNI <font color="red">*</font></label><br>
            <input type="number" name="" id="" required><br><br>

            <label for="">APELLIDOS Y NOMBRES <font color="red">*</font></label><br>
            <input type="text" name="" id="" required><br><br>

            <label for="">CORREO ELECTRÓNICO <font color="red">*</font></label><br>
            <input type="email" name="" id="" required><br><br>
            <label for="">USUARIO <font color="red">*</font></label><br>
            <input type="text" name="" id="" required><br><br>
            <label for="">CONTRASEÑA <font color="red">*</font></label><br>
            <input type="password" name="" id="" required><br><br>

            <label for="">CARGO <font color="red">*</font></label><br>
            <select name="" id="" required>
                <option value="">Seleccionar cargo</option>
                <option value="">Administrador</option>
                <option value="">Empleado</option>

            </select>
            <br><br>

            <br>
            <br>
            <br>
            <br>
            
            <input class="col-3" type="reset" value="LIMPIAR">
            <input class="bg-warning" type="submit" value="CREAR"> <br><br><br><br><br>
            

        </form>

       </div>
       
    </div>



</body>

</html>