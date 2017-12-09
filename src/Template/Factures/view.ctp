<html>
<head>
<title></title>
</head>
<body>
<div class='card' style="font-family:Times new roman;">
<div class="facture view large-5 medium-8 columns content">
  <center><img src='/transport/img/logo.bmp' border='0' width="60%" height="0%"></center>
  <legend><H2 style="font-family:Times new roman; color:blue;"> <center><b>FACTURE </center></H2></legend>

  <h6 align=right> Numero: <?= h($facture->clfact) ?> </h6>
	<?php $date = date('d-m-Y'); 	?>
    <p> Date du : <?php echo date_format($facture->created,"d-M-Y"); ?></p>
    <u><b><p>DOIT: </p></b></u>
    <?php $fact = $facture->id ?>
<div class="row">
  <div class="col-xs-6">
	  <table width=100%>
	    <tr>
      <th scope="row"><?= ('Numero Client') ?></th>
      <td>:<?= h($facture->client->num)?></td>
      <tr><th scope="row"><?= ('Nom Client') ?></th>
			<td>:<?= h($facture->client->nom)?></td>
      <tr><th scope="row"><?= ('Prenom Client') ?></th>
			<td>:<?= h($facture->client->prenom) ?></td>
			</tr>
			<tr><th scope="row"><?= ('Adresse Client') ?></th>
			<td>:<?=h($facture->client->adresse) ?></td>
      </tr>
			<tr><th scope="row"><?= ('Ville') ?></th>
			<td>:<?=h($facture->client->ville) ?></td>
      </tr>
			<tr><th scope="row"><?= ('Téléphone') ?></th>
			<td>:<?=h($facture->client->telephone)?></td>
			<tr><th scope="row"><?= ('Email') ?></th>
			<td>:<?=h($facture->client->email)?></td>
    </tr>
	</table>
</div>
  <div class="col-xs-6">
  <table width=100%>
    <tr>
    <th scope="row"><?= ('Transport') ?></th>
    <td>: MSBALEINE</td>
    <tr><th scope="row"><?= ('Adresse') ?></th>
    <td>:Ambitsiky, Mananara Nord</td>
    <tr><th scope="row"><?= ('NIF') ?></th>
    <td>:5000744582</td>
    </tr>
    <tr><th scope="row"><?= ('N° STAT') ?></th>
    <td>:46201 32 2012 0 00051</td>
    </tr>
    <tr><th scope="row">Télephone</th>
    <td>:+261 00 00 000 00</td>
    </tr>
    <tr><th scope="row"><?= ('Email') ?></th>
    <td>:msbaleine@gmail.com</td>
  </tr>
</table>
</div>
</div>

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
  </div>
</div>
  <h6><i> Arrêtée la présente facture a la somme de Ar <?php echo $this->Number->format($total,['places' => 2,'locale' => 'fr_FR']); ?>
<?php echo $this->element('css/print');
$this->end(); ?>
