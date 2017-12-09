<div class="clients index large-9 medium-8 columns content">
    <legend style="font-family:Times new roman;"><font color=blue><?= __('LISTE CLIENTS') ?></font></legend>
    <?php echo $this->element('css/print');
    $this->end(); ?></legend>
    <div class="card">
    <div class="content">
    <table class="table-bordered" width=100%>
         <thead bgcolor="#6E6E6E" text="red">
            <tr>
                <th scope="col">N° </th>
                <th scope="col">CLIENT </th>
                <th scope="col">NOM </th>
                <th scope="col">PRENOM </th>
                <th scope="col">ADRESSE </th>
                <th scope="col">VILLE </th>
                <th scope="col">TELEPHONE </th>
                <th scope="col">EMAIL </th>
               <th scope="col">DATE </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><i><?= $this->Number->format($client->id) ?></td>
                <td><i><?= h($client->num) ?></td>
                <td><i><?= h($client->nom) ?></td>
                <td><i><?= h($client->prenom) ?></td>
                <td><i><?= h($client->adresse) ?></td>
                <td><i><?= h($client->ville) ?></td>
                <td><i><?= h($client->telephone) ?></td>
                <td><i><?= h($client->email) ?></td>
                <td><i><?= h($client->created) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
