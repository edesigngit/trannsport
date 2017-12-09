<div class="marchandises index large-9 medium-8 columns content">
    <h3 style="font-family:Times new roman; color:blue;"><?= __('Liste Marchandises') ?></h3>
    <div class="card">
    <div class="content">
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('N°') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marchandises as $marchandise): ?>
            <tr>
                <td><?= $this->Number->format($marchandise->id) ?></td>
                <td><?= $marchandise->has('category') ? $this->Html->link($marchandise->category->id, ['controller' => 'Categories', 'action' => 'view', $marchandise->category->id]) : '' ?></td>
                <td><?= h($marchandise->reference) ?></td>
                <td><?= h($marchandise->libelles) ?></td>
                <td><?= h($marchandise->created) ?></td>
                <td><?= h($marchandise->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marchandise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marchandise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marchandise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marchandise->id)]) ?>
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
