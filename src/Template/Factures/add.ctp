<div class="factures form large-9 medium-8 columns content">
 <?= $this->Form->create($facture) ?>
 <div class="card">
	<div class="content">
		<div class="form-group">
			<div class="row">
				<legend  style="font-family:Times new roman; color:blue;"><?= __('Traitement Facture') ?></legend>
				<div class="col-md-4">
        <label> Num Facture </label>
				<?php
				echo $this->Form->input('clientfact_id', ['class'=>'form-control', 'label'=>false]);
				?>
				</div>
				<div class="col-md-4">
				<?php
				foreach ($clientnums as $clientnum):
				$cl= h($clientnum->client_id);
        echo "
        <label> Numerô Client </label>";
				echo "<p>", "<table border=0 width=100%> <tr><td width=100% class=form-control> $cl </td></tr></table>" ;
        ?>
				<?php
				endforeach;
				?>
				</div>
				<div class="col-md-4">
				<?php
				echo $this->Form->input('voyage_id', ['class'=>'form-control','options' => $voyages]);
      	?>
				</div>
			</div>
	</div>
</div>
	<div class="card">
	<div class="content">
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
				<?php
				echo $this->Form->input('libelles',['class'=>'form-control']);
				?>
				</div>
				<div class="col-md-4">
				<?php
				echo $this->Form->input('categorie_id', ['class'=>'form-control','options' => $categories]);
				?>
				</div>
				<div class="col-md-4">
				<?php
				echo $this->Form->input('quantite',['class'=>'form-control']);
				?>
				</div>
			</div>
		</div>
		</div>
        <?= $this->Form->button(__('Enregistrer')) ?>
		<?= $this->Form->end() ?>
<div class="btn btn-sm btn-default">
<?= $this->Html->link('Nouvelle Facture',['controller'=>'Clientfacts', 'action'=>'add']); ?></div>

<?php foreach ($clientbl as $bl): ?>
<div class="btn btn-sm btn-default">
<?= $this->Html->link('Aperçu BL',['controller'=>'Clientfacts', 'action'=>'view', $bl->id]); ?></div>
<?php endforeach; ?>
<?php foreach ($fact as $factu): ?>
<div class="btn btn-sm btn-default">
<?= $this->Html->link('Aperçu Facture',['controller'=>'Factures', 'action'=>'view', $factu->id]);?></div>
<?php endforeach; ?>
</div>

</div>
<div class="factures index large-9 medium-8 columns content">
<legend><b><?= __('Marchandises') ?></b></legend>
  <div class=card>
      <div class='content'>
        <table class="table-striped" width=100%>
          <thead bgcolor='#9F9F9A'>
              <tr>
                <th>NUMERO</th>
                <th>FACTURE</th>
                <th>CLIENT</th>
                <th>LIBELLES</th>
                <th>CATEGORIE</th>
                <th>VOYAGE</th>
                <th>QUANTITE</th>
                <th>UNITE</th>
                <th>DATE</th>
                <th>MODIFICATION</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>

<?php foreach ($clientf as $clientfacture):
$clf=$clientfacture->clfact;
$i = 0;
for ($i=1; $i>1; $i++)
?>
      <?php foreach ($factures as $facture): ?>
      <?php if ($facture->clientfact->clfact == $clf): ?>
      <tr>
        <td> <?php echo $i++; ?></td>
				<td><?= h($facture->clientfact->clfact) ?></td>
        <td><?= h($facture->clientfact->client_id) ?></td>
        <td><?= h($facture->libelles) ?></td>
        <td><?= h($facture->category->categorie) ?></td>
        <td><?= $facture->has('voyage') ? $this->Html->link($facture->voyage->num, ['controller' => 'Voyages', 'action' => 'view', $facture->voyage->id]) : '' ?></td>

				<td><?= h($facture->quantite) ?></td>
        <td><?= h($facture->category->unite) ?></td>
        <td><?= h($facture->created) ?></td>
        <td><?= h($facture->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $facture->id]) ?>
                    <?php
                    if ($this->request->session()->read('Auth.User.role')  == 'admin' ||
                          $this->request->session()->read('Auth.User.role')  == 'manager'
                        ):
                    ?>
                    <?= $this->Form->postLink(__('Suppr'), ['action' => 'delete', $facture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facture->id)]) ?>
                    <?php endif; ?>
                </td>
      		</tr>
      <?php endif; ?>
			<?php endforeach; ?>
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
</div>
