<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Listes des utilisateurs</h4>
                </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
	                    <th><?= $this->Paginator->sort('id', "N#") ?></th>
		                <th><?= $this->Paginator->sort('username', "Identification") ?></th>
		                <th><?= $this->Paginator->sort('full_name', "Nom et prenoms") ?></th>
		                <th><?= $this->Paginator->sort('password', 'Mot de passe') ?></th>
		                <th><?= $this->Paginator->sort('role', 'Role') ?></th>
		                <th class="actions"><?= __('Actions') ?></th>
                    </thead>

					<tbody>
						<?php foreach ($users as $user): ?>
						<tr>
			                <td><?= $this->Number->format($user->id) ?></td>
			                <td><?= h($user->username) ?></td>
			                <td><?= h($user->full_name) ?></td>
			                <td><?= h($user->password) ?></td>
			                <td><?= h($user->role) ?></td>
			                <td class="actions">
				            <?php if ( true /*$this->request->session()->read('Auth.User.role') === 'admin' */) { ?>

			                    <?php
									echo $this->Html->link(
									    $this->Html->tag('i', '', array('class' => 'pe-7s-pen')),
									    ['action' => 'edit',  $user->id], ['escape' => false]
									);
								?>

								<?php
									echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'pe-7s-trash')),
									['action' => 'delete', $user->id],
									['confirm' => __('Are you sure you want to delete # {0}?', $user->id),
										'escape' => false])
								?>
							<?php } ?>
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
    </div>
</div>
