<div class=card>
<div class="voyages form large-9 medium-8 columns content">
    <?= $this->Form->create($voyage) ?>
    <fieldset>
        <legend style="font-family:Times new roman; color:blue;"><?= __('MODIFIER VOYAGE') ?></legend>
        <?php
        echo $this->Form->input('num', ['class'=>'form-control']);
        echo $this->Form->input('destination', ['class'=>'form-control']);
        ?>
    </fieldset>
    </div>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</div>
