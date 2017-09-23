<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" href="/favicon.png">

	<title>Transport System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    
    <?php
    	echo $this->Html->css(['light/bootstrap.min', 'light/animate.min']);
    	echo $this->Html->css(['light/light-bootstrap-dashboard', 'light/demo']);
    	echo $this->Html->css(['light/pe-icon-7-stroke']);

    ?>
    
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body> 
	
	
	<div class="content">
	    <?= $this->fetch('content') ?> 
    </div>
	

</body>
    
	
	<?php 
		echo $this->Html->script(['light/jquery.min', 'light/jquery-ui.min', 'light/bootstrap.min']);
	?>
	
	<!--  Forms Validations Plugin -->
	<?php 
		echo $this->Html->script(['light/jquery.validate.min']);
	?>
	
	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<?php 
		echo $this->Html->script(['light/moment.min']);
	?>
	
	<!--  Date Time Picker Plugin is included in this js file -->
    <?php 
		echo $this->Html->script(['light/bootstrap-datetimepicker']);
	?>
	
	<!--  Select Picker Plugin -->
	<?php 
		echo $this->Html->script(['light/bootstrap-selectpicker']);
	?>
	
	
	<?php 
		echo $this->Html->script(['light/light-bootstrap-dashboard', 'light/demo']);
	?>
	    
    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
    
</html>