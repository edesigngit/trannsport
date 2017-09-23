<div class="categories view large-9 medium-8 columns content">
    <h3>Marchandise N°<?= h($category->id) ?></h3>
    <div class=card>
	<table class="vertical-table" class="table">
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td>:&nbsp <?= h($category->categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td>:&nbsp <?= h($category->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td>:&nbsp <?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cut') ?></th>
            <td>:&nbsp <?= $this->Number->format($category->cut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td>:&nbsp <?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td>:&nbsp <?= h($category->modified) ?></td>
        </tr>
    </table>
	</div>
</div>
