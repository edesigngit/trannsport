<center><font color = #FF44FF >Derinier N°:
<?php foreach ($clientf as $clientfa):
  	echo $clientfa->clfact ?>
<?php endforeach; ?></h5> </font>
</font>
</center>
<div class="clientfacts form large-9 medium-8 columns content">
    <?= $this->Form->create($clientfact) ?>
<legend  style="font-family:Times new roman; color:blue;"><?= __('Entrer Facture et Client') ?></legend>
  <div class="card">
  <div class="content">
	<div class="form-group">
	<div class="row">
  <div class="col-md-4">
	<label> Num Facture </label>
        <?php  echo $this->Form->input('clfact', ['class'=>'form-control', 'label'=>false,'minLength'=>6]); ?>
	<label> Num Client </label>
        <?php  echo $this->Form->input('client_id', ['label'=>false, 'class'=>'form-control','options' => $clients]); ?>
    </div>
   </div>
  </div>
 </div>
 <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
