<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $facture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $facture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Factures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientfacts'), ['controller' => 'Clientfacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clientfact'), ['controller' => 'Clientfacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voyages'), ['controller' => 'Voyages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voyage'), ['controller' => 'Voyages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="factures form large-9 medium-8 columns content">
    <?= $this->Form->create($facture) ?>
    <fieldset>
        <legend><?= __('Edit Facture') ?></legend>
        <?php
            echo $this->Form->input('clientfact_id', ['options' => $clientfacts]);
            echo $this->Form->input('libelles');
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('voyage_id', ['options' => $voyages]);
            echo $this->Form->input('quantite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
