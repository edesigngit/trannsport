<div class="bonLivraisons index large-9 medium-8 columns content">
    <legend><?= __('Bon Livraisons') ?></legend>
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor=#5F5FF5>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('N°') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marchandise_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voyages_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bonLivraisons as $bonLivraison): ?>
            <tr>
                <td><?= $this->Number->format($bonLivraison->id) ?></td>
                <td><?= $bonLivraison->has('client') ? $this->Html->link($bonLivraison->client->id, ['controller' => 'Clients', 'action' => 'view', $bonLivraison->client->id]) : '' ?></td>
                <td><?= $bonLivraison->has('marchandise') ? $this->Html->link($bonLivraison->marchandise->id, ['controller' => 'Marchandises', 'action' => 'view', $bonLivraison->marchandise->id]) : '' ?></td>
                <td><?= $bonLivraison->has('voyage') ? $this->Html->link($bonLivraison->voyage->id, ['controller' => 'Voyages', 'action' => 'view', $bonLivraison->voyage->id]) : '' ?></td>
                <td><?= $bonLivraison->has('category') ? $this->Html->link($bonLivraison->category->id, ['controller' => 'Categories', 'action' => 'view', $bonLivraison->category->id]) : '' ?></td>
                <td><?= h($bonLivraison->quantite) ?></td>
                <td><?= h($bonLivraison->created) ?></td>
                <td><?= h($bonLivraison->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bonLivraison->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bonLivraison->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bonLivraison->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonLivraison->id)]) ?>
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
