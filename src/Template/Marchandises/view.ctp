<div class="marchandises view large-9 medium-8 columns content">
    <h3 style="font-family:Times new roman; color:blue;"><?= h($marchandise->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $marchandise->has('category') ? $this->Html->link($marchandise->category->id, ['controller' => 'Categories', 'action' => 'view', $marchandise->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($marchandise->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelles') ?></th>
            <td><?= h($marchandise->libelles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marchandise->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($marchandise->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($marchandise->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bon Livraisons') ?></h4>
        <?php if (!empty($marchandise->bon_livraisons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Marchandise Id') ?></th>
                <th scope="col"><?= __('Voyages Id') ?></th>
                <th scope="col"><?= __('Categorie Id') ?></th>
                <th scope="col"><?= __('Quantite') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($marchandise->bon_livraisons as $bonLivraisons): ?>
            <tr>
                <td><?= h($bonLivraisons->id) ?></td>
                <td><?= h($bonLivraisons->client_id) ?></td>
                <td><?= h($bonLivraisons->marchandise_id) ?></td>
                <td><?= h($bonLivraisons->voyages_id) ?></td>
                <td><?= h($bonLivraisons->categorie_id) ?></td>
                <td><?= h($bonLivraisons->quantite) ?></td>
                <td><?= h($bonLivraisons->created) ?></td>
                <td><?= h($bonLivraisons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BonLivraisons', 'action' => 'view', $bonLivraisons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BonLivraisons', 'action' => 'edit', $bonLivraisons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BonLivraisons', 'action' => 'delete', $bonLivraisons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonLivraisons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Factures') ?></h4>
        <?php if (!empty($marchandise->factures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Num Facture') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Marchandise Id') ?></th>
                <th scope="col"><?= __('Libelles') ?></th>
                <th scope="col"><?= __('Categorie Id') ?></th>
                <th scope="col"><?= __('Voyages Id') ?></th>
                <th scope="col"><?= __('Dates') ?></th>
                <th scope="col"><?= __('Quantite') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($marchandise->factures as $factures): ?>
            <tr>
                <td><?= h($factures->id) ?></td>
                <td><?= h($factures->num_facture) ?></td>
                <td><?= h($factures->client_id) ?></td>
                <td><?= h($factures->marchandise_id) ?></td>
                <td><?= h($factures->libelles) ?></td>
                <td><?= h($factures->categorie_id) ?></td>
                <td><?= h($factures->voyages_id) ?></td>
                <td><?= h($factures->dates) ?></td>
                <td><?= h($factures->quantite) ?></td>
                <td><?= h($factures->created) ?></td>
                <td><?= h($factures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Factures', 'action' => 'view', $factures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Factures', 'action' => 'edit', $factures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factures', 'action' => 'delete', $factures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
