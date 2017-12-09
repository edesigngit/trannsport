<div class="card" style="font-family:Times new roman;" >
    <legend  style="font-family:Times new roman; color:blue;"><?= __('Liste Bon de Livraison') ?></legend>
    <table cellpadding="0" cellspacing="0" class='table-bordered' width=100%>
        <thead bgcolor=#5F5FF5>
            <tr>
                <th scope="col"><center><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('N° BL') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('N°Client') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><center><?= $this->Paginator->sort('modifié') ?></th>
                <th scope="col" class="actions"><center><?= __('Action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientfacts as $clientfact): ?>
            <tr>
                <td align=right><?= $this->Number->format($clientfact->id) ?></td>
                <td  align=center>BL N°<?php if($clientfact->id<10){echo 0;}?><?= h($clientfact->id)?></td>
                <td  align=center><?= $clientfact->has('client') ? $this->Html->link($clientfact->client->num, ['controller' => 'Clients', 'action' => 'view', $clientfact->client->id]) : '' ?></td>
                <td  align=center><?= date_format($clientfact->created,'d-M-Y') ?></td>
                <td  align=center><?= date_format($clientfact->modified,'d-M-Y') ?></td>
                <td  class="actions" >
                    <center><?= $this->Html->link(__('Aperçu'), ['action' => 'view', $clientfact->id]) ?>
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
