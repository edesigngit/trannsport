<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Modifier Marchandise') ?></legend>
        <?php
            echo $this->Form->input('ref_categorie',['class'=>'form-control']);
            echo $this->Form->input('categorie',['class'=>'form-control']);
            echo $this->Form->input('description',['class'=>'form-control']);
            echo $this->Form->input('cut',['class'=>'form-control']);
            echo $this->Form->input('unite',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
