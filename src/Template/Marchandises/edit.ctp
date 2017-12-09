<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marchandise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marchandise->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marchandises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bon Livraisons'), ['controller' => 'BonLivraisons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bon Livraison'), ['controller' => 'BonLivraisons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marchandises form large-9 medium-8 columns content">
    <?= $this->Form->create($marchandise) ?>
    <fieldset>
        <legend  style="font-family:Times new roman; color:blue;"><?= __('Edit Marchandise') ?></legend>
        <?php
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('reference');
            echo $this->Form->input('libelles');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
