<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS-->
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Propio-->
    <link rel="stylesheet" href="assets/css/style.css?1.0" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style_card.css?1.0" type="text/css" media="all">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Empleados</title>
</head>
<body id="body">
    <!--Menu -->
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="icon__menu">
            Admin
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fas fa-hand-holding-medical"></i>
            <h4>Sociedad Medica</h4>
        </div>

        <div class="options__menu">

            <a href="http://localhost/CitasMedicas_Admin/" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h5>Inicio</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Admin/consultas">
                <div class="option">
                    <i class="fas fa-file-medical" title="Consultas"></i>
                    <h5>Consultas</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Admin/medico">
                <div class="option">
                    <i class="fas fa-stethoscope" title="Medicos"></i>
                    <h5>Medicos</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Admin/empleado">
                <div class="option">
                    <i class="fas fa-id-card-alt" title="Empleados"></i>
                    <h5>Empleados</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Admin/especialidad">
                <div class="option">
                    <i class="fas fa-briefcase-medical" title="Especialidades"></i>
                    <h5>Especialidades</h5>
                </div>
            </a>

            <a href="http://localhost/CitasMedicas_Admin/nomina">
                <div class="option">
                    <i class="fas fa-user-friends" title="Nominas"></i>
                    <h5>Nominas</h5>
                </div>
            </a>

        </div>

    </div>
    <!--Fin Menu -->
    <main>
    <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Consultas</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row" style="margin:20px;">
                                    <table class="table table-bordered border-dark" style="background-color: white;">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Empleado</th>
                                                <th scope="col">Especialidad</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Hora</th>
                                                <th scope="col">Paciente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($consultas as $consulta)
                                                {
                                            ?>
                                            <tr id="<?php echo 'filaC_'.$consulta->cod_con; ?>">
                                                <th scope="row"><?php echo $consulta->cod_con; ?></th>
                                                <td>
                                                    <?php 
                                                        foreach($empleados as $empleado)
                                                        {
                                                            if($empleado->cod_emp == $consulta->cod_emp)
                                                            {
                                                                echo $empleado->nombre_emp;
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                        foreach($especialidades as $especialidad)
                                                        {
                                                            if($consulta->cod_esp == $especialidad->cod_esp)
                                                            {
                                                                echo $especialidad->nombre_esp;
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                                <td class="consulta-item"><?php echo $consulta->fecha_con; ?></td>
                                                <td class="consulta-item"><?php echo $consulta->hora_con; ?></td>
                                                <td class="consulta-item"><?php echo $consulta->paciente_con; ?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </main>

    <!--JS-->
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <!--Propio-->
    <script src="assets/js/script.js"></script>

</body>