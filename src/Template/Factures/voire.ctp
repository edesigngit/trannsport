<div class="categories view large-9 medium-8 columns content">
    <legend style="font-family:Times new roman;"><font color=#0404B4>Marchandise N°<?= h($facture->id) ?></font></legend>
    <div class=card>
	<table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('numero') ?></th>
            <td> <?= h($facture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N° Facture') ?></th>
            <td><?= h($facture->clientfact->clfact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N° CLient') ?></th>
            <td><?= h($facture->client->num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelles') ?></th>
            <td><?= h($facture->category->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td><?= h($facture->category->ref_categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= h($facture->category->cut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($facture->quantite) ?></td>
        </tr>
        <tr>
          <?php $montant = $facture->category->cut * $facture->quantite ?>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?php echo $this->Number->format($montant,['places' => 2,'locale' => 'fr_FR']); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($facture->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($facture->modified) ?></td>
        </tr>
    </table>
	</div>
</div>
