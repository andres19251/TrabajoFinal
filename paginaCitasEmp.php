<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avan Salud/Iniciar Sesión/Empleado/Citas</title>

    <link rel="stylesheet" href="../CSS/paginaCitasEmp.css">
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
                    <h4 class="text-light font-weight-bold" >Empleado</h4>
                </div>
                <div class="menu" style="text-align: left;">
                   <a href="paginaCitasEmp.php" class="d-block text-light p-4 lateral"><i class="fa-solid fa-calendar-plus mr-2 lead"></i> Citas</a>
                </div>
            </div>

            <div class="col-md-9">
            <br>
                <h2><font>LISTA DE CITAS</font></h2><br>
                
                    <a style="text-align: right;" href="reservar_cita.php" class="btn btn-success">AGREGAR CITA</a> <br><br><br>
                            <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo Orden</th>
                            <th>DNI Cliente</th>
                            <th>Nombre Cliente</th>
                            <th>Apellido Cliente</th>
                            <th>Especialidad</th>
                            <th>Fecha Registrado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody> 
                        <tr>
                            <th>1</th>
                            <th>76189900</th>
                            <th>Cliente</th>
                            <th>Cli</th>
                            <th>Psicologia</th>
                            <th><?php  $DateAndTime2 = date('m-d-Y h:i:s a', time()); echo $DateAndTime2 ?></th>
                            
                            <th><a href="" class="btn btn-info">EDITAR</a></th>
                            <th><a href="" class="btn btn-danger">ELIMINAR</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        
    </div>

</body>

</html>