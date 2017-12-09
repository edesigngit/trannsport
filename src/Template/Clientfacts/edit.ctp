<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientfact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientfact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientfacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientfacts form large-9 medium-8 columns content">
    <?= $this->Form->create($clientfact) ?>
    <fieldset>
        <legend  style="font-family:Times new roman; color:blue;"><?= __('Edit Clientfact') ?></legend>
        <?php
            echo $this->Form->input('clfact');
            echo $this->Form->input('client_id', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
