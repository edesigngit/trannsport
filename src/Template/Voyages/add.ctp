   <center>
   <font color =#6F446F> <h5> Dernier numero: 
   <?php foreach ($voyagese as $travel): 
  	echo $travel->num ?>
   <?php endforeach; ?></h5> </font>
</center>
<div class="voyages form large-9 medium-8 columns content">
   <?= $this->Form->create($voyage) ?>
     <legend><?= __('Ajouter Voyage') ?></legend>
        <div class="card">
        <div class="content">
        <div class="form-group">
        <div class="row">
        <div class="col-md-4">
			<?php
            echo $this->Form->input('num',['class'=>'form-control','minLength'=>4]);
            echo $this->Form->input('destination',['class'=>'form-control']);
			?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
