<html>
<head>
  <title></title>
<body>
<div class='card' style="font-family:Times new roman;">
<div class="facture view large-5 medium-8 columns content">
  <center><img src='/transport/img/logo.bmp' border=1 width="60%" height="10%"></center>
  <legend> <center><b>FACTURE </center> <h6 align=right> Numero:&nbsp<?= h($facture->clientfact->clfact) ?></h6></legend>
	<?php $date = date("d-m-Y"); 	?>
    <p>Date du : <?php echo date_format($facture->clientfact->created,"d-M-Y"); ?>
	<u><b><p>DOIT: </p></b></u>
	<?php $fact = $facture->clientfact->id ?>
	<table width=50%>
	    <tr>
      <th scope="row"><?= ('Numero Client') ?></th>
      <td>:&nbsp<?= h($facture->client->num)?></td>
      <tr><th scope="row"><?= ('Nom Client') ?></th>
			<td>:&nbsp<?= h($facture->client->nom)?></td>
      <tr><th scope="row"><?= ('Prenom Client') ?></th>
			<td>:&nbsp<?= h($facture->client->prenom) ?></td>
			</tr>
			<tr><th scope="row"><?= ('Adresse Client') ?></th>
			<td>:&nbsp<?=h($facture->client->adresse) ?></td>
      </tr>
			<tr><th scope="row"><?= ('Ville') ?></th>
			<td>:&nbsp<?=h($facture->client->ville) ?></td>
      </tr>
			<tr><th scope="row"><?= ('Téléphone') ?></th>
			<td>:&nbsp<?=h($facture->client->telephone)?></td>
			<tr><th scope="row"><?= ('Email') ?></th>
			<td>:&nbsp<?=h($facture->client->email)?></td>
    </tr>
	</table>
	<hr color="blue">
	<div class="related">
	<table class="horizontal-table table-bordered" width=100%>
	<tr>
	<th scope="row"><?= __('num') ?></th>
	<th scope="row"><?= __('Libelles') ?></th>
	<th scope="row"><?= __('Categorie') ?></th>
  <th scope="row"><center><?= __('Quantite') ?></th>
	<th scope="row"><center><?= __('P.U') ?></th>
	<th scope="row"><center><?= __('Montant') ?></th></center>
	</tr>
	<?php
	$i = 0;
	for ($i=1; $i>1; $i++)
	?>
	<?php $montant = 0; ?>
	<?php $total = 0; ?>
	      <?php foreach ($factures as $facture): ?>
		    <tr>
			  <?php  if ($facture->clientfact_id == $fact): ?>
        <td> <?php echo $i++; ?></td>
				<td><?= h($facture->libelles) ?></td>
				<td><?= h($facture->category->categorie) ?></td>
        <td align=right><?= h($facture->quantite) ?></td>
        <td align=right><?= $this->Number->format($facture->category->cut,['places' => 2,'locale' => 'fr_FR'])  ?></td>
        <?php $montant = $facture->quantite*$facture->category->cut; ?>
				<?php $total += $montant; ?>
        <td align=right><?php echo $this->Number->format($montant,['places' => 2,'locale' => 'fr_FR']); ?></td>
            </tr>
			<tr>
			<?php endif; ?>
			<?php endforeach; ?>
			<td align=right colspan=5 bgcolor=#99AA99><b>Somme</td>
			<td align=right bgcolor=#99AA99><b><?php echo $this->Number->format($total,['places' => 2,'locale' => 'fr_FR']); ?></td>

        </tr>
    </table>
  <h6><i> Arrêter la presente facture au somme de Ar <?php echo $this->Number->format($total,['places' => 2,'locale' => 'fr_FR']); ?>
</div>
