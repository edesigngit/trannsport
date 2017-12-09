<div class="bonLivraisons view large-9 medium-8 columns content">
    <h3  style="font-family:Times new roman; color:blue;"><?= h($bonLivraison->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $bonLivraison->has('client') ? $this->Html->link($bonLivraison->client->id, ['controller' => 'Clients', 'action' => 'view', $bonLivraison->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marchandise') ?></th>
            <td><?= $bonLivraison->has('marchandise') ? $this->Html->link($bonLivraison->marchandise->id, ['controller' => 'Marchandises', 'action' => 'view', $bonLivraison->marchandise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voyage') ?></th>
            <td><?= $bonLivraison->has('voyage') ? $this->Html->link($bonLivraison->voyage->id, ['controller' => 'Voyages', 'action' => 'view', $bonLivraison->voyage->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $bonLivraison->has('category') ? $this->Html->link($bonLivraison->category->id, ['controller' => 'Categories', 'action' => 'view', $bonLivraison->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantite') ?></th>
            <td><?= h($bonLivraison->quantite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bonLivraison->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bonLivraison->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bonLivraison->modified) ?></td>
        </tr>
    </table>
</div>
