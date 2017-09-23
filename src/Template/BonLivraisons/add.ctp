<div class="bonLivraisons form large-9 medium-8 columns content">
    <?= $this->Form->create($bonLivraison) ?>
    <fieldset>
        <legend><?= __('Traitement Bon Livraison') ?></legend>
        <div class="card">
        <div class="content">
        <div class="form-group">
        <div class="row">
            <div class="col-md-4">
        <?php
            echo $this->Form->input('client_id', ['class'=>'form-control','options' => $clients]);
            echo $this->Form->input('marchandise_id', ['class'=>'form-control','options' => $marchandises]);
            echo $this->Form->input('voyages_id', ['class'=>'form-control','options' => $voyages]);
            echo $this->Form->input('categorie_id', ['class'=>'form-control','options' => $categories]);
            echo $this->Form->input('quantite',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
