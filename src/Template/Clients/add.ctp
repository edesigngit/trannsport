<div class="clients form large-9 medium-8 columns content">
<?= $this->Form->create($client) ?>
<legend style="font-family:Times new roman; color:blue;"><?= __('NOUVEAU CLIENT') ?></legend>

  <?php foreach($clientnum as $cl):
  echo '<div class="btn btn-xs" style="font-family:Times new roman;"><font color = #FE2E2E> Dernier Numerô:','&nbsp', $cl->num++, '</div></font>';
  endforeach;
  ?>
<div class="card ">
<div class="content">
<div class="row">
<div class="form-group">
<div class="col-md-4">
        <?php echo $this->Form->input('num',['class'=>'form-control', 'placeholder'=>'0001', 'minLength'=>6]);?>
    </div>
    </div>
    </div>
<div class="row">
<div class="form-group">
    <div class="col-md-6">
      <?php echo $this->Form->input('nom',['class'=>'form-control']);        ?>
      </div>
      <div class="col-md-6">
      <?php echo $this->Form->input('prénoms',['class'=>'form-control']);     ?>
    </div>
</div>
</div>
<div class="row">
<div class="form-group">
    <div class="col-md-6">
      <?php echo $this->Form->input('adresse',['class'=>'form-control','placeholder'=>'Lot, p/elle, Cartier, B.D:']);   ?>
    </div>
    <div class="col-md-6">
      <?php echo $this->Form->input('ville',['class'=>'form-control']); ?>
    </div>
</div>
</div>
<div class="row">
<div class="form-group">
  <div class="col-md-6">
      <?php  echo $this->Form->input('telephone',['class'=>'form-control','minLength'=>7]); ?>
  </div>
  <div class="col-md-6">
      <?php  echo $this->Form->input('email',['class'=>'form-control']); ?>
  </div>
  </div>
  </div>
  </div>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
