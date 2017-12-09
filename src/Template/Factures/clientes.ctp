<legend  style="font-family:Times new roman; color:blue;">CLIENT N° &nbsp;<?= h($clientes->num) ?></legend>
<div class=card>
<div class="clients view large-9 medium-8 columns content">
    <table class="table-bordered" width=100%>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($clientes->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($clientes->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($clientes->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($clientes->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($clientes->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($clientes->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($clientes->created) ?></td>
        </tr>

       </table>
	  </div>
	 </div>
  <legend style="font-family:Times new roman; color:blue;"><?= __('FACTURES ET OPÉRATIONS CLIENTS') ?></legend>
  <div class=card>
  <div class="clients view large-9 medium-8 columns content">
      <table class="table-bordered" width=100%>
		        <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Factures') ?></th>
                <th scope="col"><?= __('Libelles') ?></th>
                <th scope="col"><?= __('Voyages') ?></th>
                <th scope="col"><?= __('Quantité') ?></th>
                <th scope="col"><?= __('Date') ?></th>

            </tr>
		            <?php foreach ($factures as $facture): ?>
              <?php if($clientes->num == $facture->client->num): ?>
              <tr>
                <td><?= h($facture->id) ?></td>
                <td><?= h($facture->clientfact->clfact) ?></td>
                <td><?= h($facture->libelles) ?></td>
                <td><?= h($facture->voyage->num) ?></td>
                <td><?= h($facture->quantite) ?></td>
                <td><?= h($facture->created) ?></td>

            </tr>
          <?php endif;?>
        <?php endforeach; ?>
        </table>
        </div>
        <?php echo $this->element('css/print');
        $this->end(); ?>
</div>
