<div class="sidebar" Data-color="blue" data-image="#">
  <div class="logo">
  <a href="#" class="logo-text">Gestion de Transport </a>
  </div>
<?php $userid=$this->request->session()->read('Auth.User.id')?>
<div class="sidebar-wrapper">
  <div class="user">
      <div class="info">
          <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <?php echo $this->request->session()->read('Auth.User.full_name');?>
          <b class="caret"></b>
          </a>
          <div class="collapse" id="collapseExample">
          <ul class="nav">
							<?php $userid=$this->request->session()->read('Auth.User.id')?>
              <li><?php echo $this->Html->link('My Profil',['controller' => 'users', 'action' => 'view',$userid]);?></li>
							<li><?php echo $this->Html->link('Edit Profil',['controller' => 'users', 'action' => 'edit',$userid]);?></li>
							<li><a href="#">Settings</a></li>
              <li><?php
              if ($userid == ''): echo $this->Html->link('Login',['controller' => 'users', 'action' => 'login']);
              else:echo $this->Html->link('Log out',['controller' => 'users', 'action' => 'logout']);
              endif;?></li>
          </ul>
          </div>
      </div>
  </div>
 <?php
 if ($userid != ''):
 ?>
			<ul class="nav">
        <li>
            <a data-toggle="collapse" href="#clients">
                <i class="pe-7s-graph2"></i>
<p>CLIENTS
                <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="clients">
              <ul class="nav">
                  <li>
                  <?php
                  echo $this->Html->link('Liste Clients',['controller' => 'clients', 'action' => 'index']);
                  ?>
                  </li>
                  <li>
                  <?php
                  echo $this->Html->link('Nouveau Clients',['controller' => 'clients', 'action' => 'add']);
                  ?>
                  </li>
              </ul>
            </div>
        </li>

       <li>
              <a data-toggle="collapse" href="#categories">
              <i class="pe-7s-graph2"></i>
<p>Marchandises
	            <b class="caret"></b>
              </p>
              </a>
              <div class="collapse" id="categories">
              <ul class="nav">
		             <li>
		             <?php
			           echo $this->Html->link('Liste Marchandises',['controller' => 'categories', 'action' => 'index']);
		             ?>
		             </li>
              <li>
		             <?php
			           echo $this->Html->link('Ajouter Marchandise',['controller' => 'categories', 'action' => 'add']);
		             ?>
		           </li>
                </ul>
                </div>
        </li>

	      <li>
              <a data-toggle="collapse" href="#voyages">
              <i class="pe-7s-graph2"></i>
<p>Voyages
	            <b class="caret"></b>
              </p>
              </a>
              <div class="collapse" id="voyages">
              <ul class="nav">
		          <li>
		          <?php
			        echo $this->Html->link('Liste voyages ',['controller' => 'voyages', 'action' => 'index']);
		          ?>
		          </li>

		          <li>
		          <?php
			        echo $this->Html->link('Nouvelle Voyage',['controller' => 'voyages', 'action' => 'add']);
		          ?>
		          </li>
					    </ul>
              </div>
      </li>
      <li>
            <a data-toggle="collapse" href="#bon_livraisons">
            <i class="pe-7s-graph2"></i>
<p>Bon de Livraison
            <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="bon_livraisons">
            <ul class="nav">
            <li>
            <?php
            echo $this->Html->link('Liste BL',['controller' => 'clientfacts', 'action' => 'index']);
            ?>
            </li>
            </ul>
            </div>
    </li>
    <li>
          <a data-toggle="collapse" href="#factures">
          <i class="pe-7s-graph2"></i>
<p>Traitement Factures
          <b class="caret"></b>
          </p>
          </a>
          <div class="collapse" id="factures">
          <ul class="nav">
		  <li>
          <?php
          echo $this->Html->link('Entrer Voyage',['controller' => 'Voyages', 'action' => 'add']);
          ?>
          </li>
		  <li>
          <?php
          echo $this->Html->link('Entrer Num Facture',['controller' => 'clientfacts', 'action' => 'add']);
          ?>
          </li>
		  <li>
          <?php
          echo $this->Html->link('Entrer Marchandises',['controller' => 'factures', 'action' => 'add']);
          ?>
          </li>
		  <li>
          <?php
          echo $this->Html->link('Liste Bon de Livraison',['controller' => 'clientfacts', 'action' => 'index']);
          ?>
          </li>
		  
          <li>
          <?php
          echo $this->Html->link('Listes Factures',['controller' => 'factures', 'action' => 'index']);
          ?>
          </li>

          </ul>
          </div>
  </li>

</ul>
<?php else: {echo'<center><h5>Menu de travail';} ?>
<?php endif; ?>
    	</div>
    </div>
