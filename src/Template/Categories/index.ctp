<body style="font-family:Times new roman;">
<div class="categories index large-9 medium-8 columns content">
    <legend><?= __('LISTE MARCHANDISES') ?></legend>
    <div class="card">
    <div class="content">
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor='#5F2F9A'>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->ref_categorie) ?></td>
                <td><?= h($category->categorie) ?></td>
                <td><?= h($category->description) ?></td>
                <td><?= $this->Number->format($category->cut) ?></td>
                <td><?= h($category->unite) ?></td>
                <td><?= date_format($category->created,'d/M/Y') ?></td>
                <td><?= date_format($category->modified,'d/M/Y') ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Suppr'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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
