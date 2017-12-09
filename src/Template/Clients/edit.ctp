
<div class=card>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend style="font-family:Times new roman; color:blue;"><?= __('MODIFIER CLIENT') ?></legend>
        <div class="row">
		<div class="col-md-4">
            <?php echo $this->Form->input('num',['class'=>'form-control']);?>
			</div>
		<div class="col-md-4">
            <?php echo $this->Form->input('nom',['class'=>'form-control']);?>
			</div>
		</div>
		<div class="row">
		<div class="col-md-4">
            <?php echo $this->Form->input('prenom',['class'=>'form-control']);?>
			</div>
		<div class="col-md-4">
            <?php echo $this->Form->input('adresse',['class'=>'form-control']);?>
			</div>
			</div>
	    <div class="row">
		<div class="col-md-4">
            <?php echo $this->Form->input('ville',['class'=>'form-control']);?>
			</div>
		<div class="col-md-4">
            <?php echo $this->Form->input('telephone',['class'=>'form-control']);?>
			</div>
		<div class="col-md-4">
            <?php echo $this->Form->input('email',['class'=>'form-control']);?>
        </div>
    </div>
	</div>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
