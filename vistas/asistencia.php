<!DOCTYPE html>
<html>
  <head>
  <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CC | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
    <link rel="shortcut icon" href="../admin/public/img/favicon.ico">

  </head>
<body class="hold-transition lockscreen">

<!-- Automatic element centering -->
<div class="m-40 mx-auto my-auto text-center grid content-center h-screen">
<?php 
 //include '../ajax/asistencia.php' ?>
    <div name="movimientos" id="movimientos">
    </div> 



  <div class=" text-center mx-auto">
    <img src="http://std.drepuno.gob.pe/images/login_Puno.gif" class=" mx-auto"> </img>
    <a href="#" class="text-8xl font-bold" >Asistencia rosaditos</a>
  </div>
  <!-- User name -->
  <div class="text-5xl my-10">Ingrese su codigo y presione "Enter" para marca su asistencia.</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->

    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form  action="" class="rounded-2xl h-40 grid content-center " name="formulario" id="formulario" method="POST">
      <div class="input-group flex w-full">
        <input type="password" class="h-20 2/3 rounded-2xl text-3xl mx-10" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">

        <div class="input-group-btn">
          <button type="submit" class=" rounded-2xl border-solid-2xl h-20 w-20"> -> </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->

  <div class="text-center">

  </div>
  <div class="lockscreen-footer text-center">
    <a href="../admin/">Iniciar Sesión</a>
  </div>
</div>
<!-- /.center -->


    <!-- jQuery -->
    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/asistencia.js"></script>


  </body>
</html> 
