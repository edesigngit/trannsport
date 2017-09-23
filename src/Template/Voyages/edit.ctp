<div class=card>
<div class="voyages form large-9 medium-8 columns content">
    <?= $this->Form->create($voyage) ?>
    <fieldset>
        <legend><?= __('MODIFIER VOYAGE') ?></legend>
        <?php
        echo $this->Form->input('num', ['class'=>'form-control']);
        echo $this->Form->input('destination', ['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
