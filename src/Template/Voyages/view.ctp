<div class=card>
<div class="voyages view large-9 medium-8 columns content">
    <h3>VOYAGE N°:&nbsp<?= h($voyage->num) ?></h3>
    <table  class="table table-bordered">
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= h($voyage->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('num') ?></th>
            <td><?= h($voyage->num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dates') ?></th>
            <td><?= h($voyage->created) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($voyage->modified) ?></td>
        </tr>
    </table>
</div>
</div>
