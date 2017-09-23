<body style="font-family:Times new roman;">
<div class='card'style="width:90%;">
<center><img src='/transport/img/logo2.bmp' border=1 width=70% height=50%></center>
<div class="facture view large-5 medium-8 columns content">
    <legend style="color:blue;"><center><b>Bon de Livraison</center>
    <h6 align=right> Numero:<?php if($clientfact->id<10){echo 0;}?> <?= h($clientfact->id) ?></b></h6></legend>
    <table class="table-striped" >
        <tr>
            <th scope="row"><?= __('Facture N°') ?></th>
            <td>:<?= h($clientfact->clfact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Client') ?></th>
            <td>:<?= h($clientfact->client->num)?></td>
        </tr>
		      <tr>
            <th scope="row"><?= __('Nom Client') ?></th>
            <td>:<?= h($clientfact->client->nom)?></td>
        </tr>
		      <tr>
            <th scope="row"><?= __('Prenom Client') ?></th>
            <td>:<?= h($clientfact->client->prenom) ?></td>
        </tr>
		<tr>
            <th scope="row"><?= __('Adresse Client') ?></th>
            <td>:<?= h($clientfact->client->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td>:<?= date_format($clientfact->created,'d-m-Y') ?></td>
        </tr>
    </table>
    <div class="related">
    <?php
    $i = 0;
  	for ($i=1; $i>1; $i++)
  	?>
<div>
  <hr>
        <legend><?= __('Marchandises Livrés') ?></legend>
        <?php if (!empty($clientfact->factures)): ?>
        <table cellpadding="0" cellspacing="0" class="table-bordered" width=80% align=center>
            <thead bgcolor=#9f9ff9>
                <th scope="col"><?= __('N°') ?></th>
                <th scope="col"><?= __('Libelles') ?></th>
                <th><b><center><?= __('Quantite') ?></center></th>
                <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </thead>
            <?php foreach ($clientfact->factures as $factures): ?>
            <tr>
                <td> <?php echo $i++; ?></td>
                <td><?= h($factures->libelles) ?></td>
                <td align='right' width=10%><?= h($factures->quantite) ?></td>
				        <!--            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Factures', 'action' => 'view', $factures->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Factures', 'action' => 'edit', $factures->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factures', 'action' => 'delete', $factures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factures->id)]) ?>
    </td> -->
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</body>
