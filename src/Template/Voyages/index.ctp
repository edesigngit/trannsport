<body style="font-family:Times new roman;">
<div class="voyages index large-9 medium-8 columns content">
    <legend><?= __('Liste Voyages') ?></legend>
    <div class="card">
    <div class="content">
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor = #5F5FF5>
            <tr>
                <th scope="col"><center><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('Numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><center><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($voyages as $voyage): ?>
            <tr>
                <td align=right><?= $this->Number->format($voyage->id) ?></td>
                <td><center><?= h($voyage->num) ?></td>
                <td><?= h($voyage->destination) ?></td>
                <td align=center><?= date_format($voyage->created,"j-M-Y") ?></td>
                <td align=center><?= date_format($voyage->modified,"j-M-Y") ?></td>
                <td class="actions" align=center>
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $voyage->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $voyage->id]) ?>
                    <?= $this->Form->postLink(__('Suppr'), ['action' => 'delete', $voyage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voyage->id)]) ?>
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
