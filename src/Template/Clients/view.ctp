<legend  style="font-family:Times new roman; color:blue;">CLIENT N° &nbsp;<?= h($client->num) ?></legend>
<div class=card>
<div class="clients view large-9 medium-8 columns content">
    <table width=100%>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td>:&nbsp;<?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td>:&nbsp;<?= h($client->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td>:&nbsp;<?= h($client->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td>:&nbsp;<?= h($client->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td>:&nbsp;<?= h($client->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td>:&nbsp;<?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td>:&nbsp;<?= h($client->created) ?></td>
        </tr>

       </table>
	  </div>
	 </div>
