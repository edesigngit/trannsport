<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <legend style="font-family:Times new roman;"><font color=blue><?= __('AJOUTER DES MARCHANDISES') ?></font></legend>

    <div class="card">
	<div class="content">
    <div class="form-group">
<div class="row">
    <div class="col-md-1">
	<label> Reference </label>
         <?php   echo $this->Form->input('ref_categorie', ['class'=>'form-control', 'label'=>false]); ?>
	</div>
	<div class="col-md-2">
         <?php   echo $this->Form->input('categorie', ['class'=>'form-control', 'type'=>'text']); ?>
	</div>
	<div class="col-md-3">
         <?php   echo $this->Form->input('description', ['class'=>'form-control']); ?>
	</div>
	<div class="col-md-3">
         <?php   echo $this->Form->input('cut', ['class'=>'form-control']);?>
	</div>
		<div class="col-md-3">
         <?php   echo $this->Form->input('unite', ['class'=>'form-control']); ?>
	</div>

</div>
</div>
</div>
 <?= $this->Form->button(__('Submit')) ?>
 <?= $this->Form->end() ?>
</div>
<div class="card">
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor='#9E9E9E'>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->ref_categorie) ?></td>
                <td><?= h($category->categorie) ?></td>
                <td><?= h($category->description) ?></td>
                <td><?= $this->Number->format($category->cut) ?></td>
                <td><?= h($category->unite) ?></td>
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Suppr'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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
</div>
