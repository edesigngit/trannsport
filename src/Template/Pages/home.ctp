<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestion de transport</title>
  <style>
  </style>
</head>
<center><img src='/transport/img/logo.bmp' border=0 width="100%" height="10%"></center>
<body>
<?php $userid=$this->request->session()->read('Auth.User.id')?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-12 sidenav">
      <center><h3>GESTION DE TRANSPORT LOCAL</h3>
      <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="#"></a></li>
        <?php
          if ($userid == ''):  echo '<a href="users/login"><h4>SE CONNECTER</h4></a>' ;
                               echo '<li class="active"><a href="#">clic sur "se connecter" pour commencer</a></li>' ;
          else:  echo '<li class="active"><a href="#"><h4>Bienvenue</h4></a></li>' ;
          echo '<h4>'; echo $this->request->session()->read('Auth.User.full_name');
          echo '<h4> Veuillez selectionner les menus à gauche';
          endif;
		?>
      </ul><br>
      </div>
    </div>
    </div>
</body>
</html>
