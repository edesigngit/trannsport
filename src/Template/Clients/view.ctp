<legend>CLIENT N° &nbsp;<?= h($client->num) ?></legend>
<div class=card>
<div class="clients view large-9 medium-8 columns content">
    <table width=100%>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td>:&nbsp;<?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td>:&nbsp;<?= h($client->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td>:&nbsp;<?= h($client->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td>:&nbsp;<?= h($client->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td>:&nbsp;<?= h($client->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td>:&nbsp;<?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td>:&nbsp;<?= h($client->created) ?></td>
        </tr>

       </table>
	  </div>
	 </div>
	</div>

  <!--  <div class="related">
        <h4><?= __('Related Bon Livraisons') ?></h4>
        <?php if (!empty($client->bon_livraisons)): ?>
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
            <?php foreach ($client->bon_livraisons as $bonLivraisons): ?>
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
    </div> -->

    <div class="related">
     <legend><?= __('FACTURES ET OPÉRATIONS CLIENTS') ?></legend>
        <?php if (!empty($client->factures)): ?>
      <?php    echo $clientfacts->id ; ?>
	<div class=card>
        <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
		 <thead bgcolor="#8F8F8F">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Num Facture') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Libelles') ?></th>
                <th scope="col"><?= __('Voyages Id') ?></th>
                <th scope="col"><?= __('Quantite') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		</thead>
            <?php foreach ($clientfacts as $factures): ?>
            <tr>
                <td><?= h($factures->id) ?></td>
                <td><?= h($factures->clientfact_id) ?></td>
                <td><?= h($clientnums->num) ?></td>
                <td><?= h($factures->libelles) ?></td>
                <td><?= h($factures->voyages_id) ?></td>
                <td><?= h($factures->quantite) ?></td>
                <td><?= h($factures->created) ?></td>
                <td><?= h($factures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['controller' => 'Factures', 'action' => 'view', $factures->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['controller' => 'Factures', 'action' => 'edit', $factures->id]) ?>
                    <?= $this->Form->postLink(__('Suppr'), ['controller' => 'Factures', 'action' => 'delete', $factures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
