<body style="font-family:Times new roman;">
<div class="categories index large-9 medium-8 columns content">
   <legend style="font-family:Times new roman; color:blue;"> LISTE MARCHANDISES</legend>
     <?php echo $this->element('css/print');$this->end(); echo''?>
    <div class="card">
    <div class="content">
    <table cellpadding="0" cellspacing="0" class="table-bordered" width=100%>
        <thead bgcolor='#2E64FE'>
            <tr>
                <th scope="col">NUMERO</th>
                <th scope="col">REFENRENCE</th>
                <th scope="col">CATEGORIE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PRIX</th>
                <th scope="col">UNITE</th>
                <th scope="col">DATE</th>
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
                <td><?= date_format($category->created,'d/M/Y') ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
  </div>
