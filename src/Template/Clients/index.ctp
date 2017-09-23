<nav class="large-3 medium-4 columns" id="actions-sidebar" align="right">
        <div class="btn btn-xs"><?= $this->Html->link(__('Nouveau Client'), ['action' => 'add']) ?></div> &nbsp; &nbsp;&nbsp; &nbsp;
        <div class="btn btn-xs"><?= $this->Html->link(__('Liste Factures'), ['controller' => 'Factures', 'action' => 'index']) ?></div>&nbsp;&nbsp;&nbsp; &nbsp;
        <div class="btn btn-xs"><?= $this->Html->link(__('Nouveau Facture'), ['controller' => 'Factures', 'action' => 'add']) ?></div>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <legend style="font-family:Times new roman;"><font color=blue><?= __('LISTE CLIENTS') ?></font></legend>
    <div class="card">
    <div class="content">
    <table class="table-bordered" width=100%>
         <thead bgcolor="#6E6E6E" text="red">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('N°') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
             <!--   <th scope="col"><?= $this->Paginator->sort('dates') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifier') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><i><?= $this->Number->format($client->id) ?></td>
                <td><i><?= $this->Html->link ($client->num, ['controller' => 'Clients', 'action' => 'view', $client->id]) ?></td>
                <td><i><?= h($client->nom) ?></td>
                <td><i><?= h($client->prenom) ?></td>
                <td><i><?= h($client->adresse) ?></td>
                <td><i><?= h($client->ville) ?></td>
                <td><i><?= h($client->telephone) ?></td>
                <td><i><?= h($client->email) ?></td>
            <!--    <td><i><?= h($client->created) ?></td>
                <td><i><?= h($client->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $client->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $client->id]) ?>
                    <?= $this->Form->postLink(__('Suppr'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
