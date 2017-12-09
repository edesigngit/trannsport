<div class="marchandises form large-9 medium-8 columns content">
    <?= $this->Form->create($marchandise) ?>
    <legend style="font-family:Times new roman; color:blue;"><?= __('Ajouter Marchandise') ?></legend>
    <div class="card">
    <div class="content">
    <div class="form-group">
    <div class="row">
        <div class="col-md-4">
        <?php
            echo $this->Form->input('categorie_id', ['class'=>'form-control','options' => $categories]);
            echo $this->Form->input('reference', [ 'class'=>'form-control']);
            echo $this->Form->input('libelles', [ 'class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
