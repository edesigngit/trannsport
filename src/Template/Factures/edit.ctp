<div class="factures form large-9 medium-8 columns content">
    <?= $this->Form->create($facture) ?>
    <fieldset>
        <legend style="font-family:Times new roman; color:blue;"><?= __('Modifier Marchandise') ?></legend>
        <?php
            echo $this->Form->input('clientfact_id', ['options' => $clientfacts]);
            echo $this->Form->input('libelles');
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('voyage_id', ['options' => $voyages]);
            echo $this->Form->input('quantite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
