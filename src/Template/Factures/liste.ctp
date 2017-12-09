<div class="card" style="font-family:Times new roman;" >
    <legend  style="font-family:Times new roman; color:blue;"><?= __('Liste Facture') ?></legend>
    <table cellpadding="0" cellspacing="0" class='table-bordered' width=100%>
        <thead bgcolor=#5F5FF5>
            <tr>
                <th><center>id</th>
                <th><center>N° Facture</th>
                <th><center>N°Client</th>
                <th><center>Date</th>
                <th><center>modifié</th>
                <th class="actions"><center><?= __('Action')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listes as $liste): ?>
              <tr>
                  <td align=right><?= h($liste->id)?></td>
                  <td  align=center><?= h($liste->clfact)?></td>
                  <td  align=center><?= h($liste->client->num)  ?></td>
                  <td  align=center><?= date_format($liste->created,'d-M-Y') ?></td>
                  <td  align=center><?= date_format($liste->modified,'d-M-Y') ?></td>
                  <td  class="actions" >
                  <center><?= $this->Html->link(__('Aperçu'), ['controller'=>'Factures','action' => 'view', $liste->id]) ?>
                  </td>
              </tr>
            <?php endforeach;?>

      </tbody>
    </table>
    </div>
