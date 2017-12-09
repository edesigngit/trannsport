<div class='card'>
<div class="factures index large-9 medium-8 columns content">
    <legend style="font-family:Times new roman; color:blue;"><?= __('Liste Enregistrements') ?></legend>
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor = #5F5FF5>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clientfact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voyage_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($factures as $facture): ?>
            <tr>
                <td><?= $this->Number->format($facture->id) ?></td>
                <td><?= h($facture->clientfact->clfact) ?></td>
                <td><?= h($facture->libelles) ?></td>
                <td><?= $facture->has('category') ? $this->Html->link($facture->category->ref_categorie,['controller' => 'Categories', 'action' => 'view', $facture->category->id]) : '' ?></td>
                <td><?= $facture->has('voyage') ? $this->Html->link($facture->voyage->num, ['controller' => 'Voyages', 'action' => 'view', $facture->voyage->id]) : '' ?></td>
                <td><?= $this->Number->format($facture->quantite) ?></td>
                <td><?= h($facture->category->unite) ?></td>
                <td><?= date_format($facture->created,'d/M/Y') ?></td>
                <td><?= date_format($facture->modified,'d/M/Y') ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voire'), ['action' => 'voire', $facture->id]) ?>
                    <?php
                    if ($this->request->session()->read('Auth.User.role')  == 'admin' ||
      										$this->request->session()->read('Auth.User.role')  == 'manager'
      									):
                    ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $facture->id]) ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
