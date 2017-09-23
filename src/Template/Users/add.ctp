<?php
use Cake\Routing\Router;
use Cake\View\Helper\UrlHelper;

?>

	<div class="card">

		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-9 header">Nouvel utilisateur</div>
		</div>
        <div class="content">

	        <?= $this->Form->create($user, ['id' => 'itemFormValidation', 'class' => "form-horizontal"]) ?>

	        	<div class="form-group">

	                <label class="col-md-3 control-label">Nom et prenoms<star>*</star></label>

	                <div class="col-md-9">
		                <?php echo $this->Form->input('full_name', ['id' => 'full_name','class' =>'form-control', 'placeholder' => "Nom et prenoms", 'required' => 'true', 'label' => false]); ?>
	                </div>
	            </div>


	            <div class="form-group">
	                <label class="col-md-3 control-label">Username<star>*</star></label>

	                <div class="col-md-9">
	                	<?php echo $this->Form->input('username', ['id' => 'username','class' =>'form-control', 'placeholder' => "User name", 'required' => 'true', 'label' => false]); ?>
	                </div>
	            </div>

	            <div class="form-group">
	                <label class="col-md-3 control-label">Mot de passe<star>*</star></label>

	                <div class="col-md-9">
	                	<?php echo $this->Form->input('password', ['id' => 'password','class' =>'form-control', 'placeholder' => "Mot de passe", 'required' => 'true', 'label' => false]); ?>
	                </div>

	            </div>

	            <div class="form-group">
	                <label class="col-md-3 control-label">Role</label>

	                <div class="col-md-9">
						<?php
		                	$opts = array('user' => 'User', 'admin'=>'Admin');
							echo $this->Form->input('role', ['id' => 'role','class' =>'form-control', 'placeholder' => "Role", 'required' => 'true', 'label' => false, 'type' => 'select', 'options' => $opts]); ?>
	                </div>

	            </div>

            <div class="text-center">
			<?php
			    echo $this->Form->submit(__('Enregistrer',true), array('class'=>'btn btn-info btn-fill'));
			    echo $this->Form->end();
			?>
			</div>

        </div>
    </div> <!-- end card -->
