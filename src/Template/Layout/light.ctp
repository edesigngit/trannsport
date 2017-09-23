<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" href="/favicon.png">

	<title>Transport</title>

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

<div class="wrapper">

    <?php
		echo $this->element('light/sidebar');
	?>

    <div class="main-panel">

       	<?php
			echo $this->element('light/navigation');
		?>

        <div class="content">
            <div class="container-fluid">
				<?= $this->Flash->render() ?>
				<div class="container-fluid">
	            	 <?= $this->fetch('content') ?>
            	</div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                        <!--        here you can add more links for the footer                       -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <?php echo date("Y");?> <a href="#">Transport</a>
                </p>
            </div>
        </footer>

    </div>
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

	<!--  Select Picker Plugin -->
	<?php
		echo $this->Html->script(['light/bootstrap-checkbox-radio-switch-tags']);
	?>

	<?php
		echo $this->Html->script(['light/bootstrap-notify']);
	?>

	<!-- Sweet Alert 2 plugin -->
	<?php
		echo $this->Html->script(['light/sweetalert2']);
	?>

	<!-- Wizard Plugin    -->
	<?php
		echo $this->Html->script(['light/jquery.bootstrap.wizard.min']);
	?>

	<!--  Datatable Plugin    -->
    <?php
		echo $this->Html->script(['light/bootstrap-table']);
	?>

	<!--  Full Calendar    -->
    <?php
		echo $this->Html->script(['light/fullcalendar.min']);
	?>


	<?php
		echo $this->Html->script(['light/light-bootstrap-dashboard', 'light/demo']);
	?>


	<script type="text/javascript">
    	$(document).ready(function(){

        	//demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Tongasoa eto amin'ny Transport."

            },{
                type: 'info',
                timer: 4000
            });

			// Init DatetimePicker
            demo.initFormExtendedDatetimepickers();

            $('#itemFormValidation').validate();
    	});
	</script>


	<?php echo $this->fetch('scriptBottom'); ?>


</html>
