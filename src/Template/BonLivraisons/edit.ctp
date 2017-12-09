<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bonLivraison->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bonLivraison->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bon Livraisons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marchandises'), ['controller' => 'Marchandises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marchandise'), ['controller' => 'Marchandises', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voyages'), ['controller' => 'Voyages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voyage'), ['controller' => 'Voyages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bonLivraisons form large-9 medium-8 columns content">
    <?= $this->Form->create($bonLivraison) ?>
    <fieldset>
        <legend  style="font-family:Times new roman; color:blue;"><?= __('Edit Bon Livraison') ?></legend>
        <?php
            echo $this->Form->input('client_id', ['options' => $clients]);
            echo $this->Form->input('marchandise_id', ['options' => $marchandises]);
            echo $this->Form->input('voyages_id', ['options' => $voyages]);
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('quantite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
