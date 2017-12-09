<nav class="navbar navbar-default">
    <div class="container-fluid">
    	<div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                <i class="fa fa-home visible-on-sidebar-regular"></i>
                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
            </button>
        </div>


        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">
                <i class="fa fa-home" aria-hidden="true"></i>ACCEUIL
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <?php
                echo $this->Form->create(null, [
				    'url' 	=> ['controller' => 'clients', 'action' => 'index'],
				    'class' => 'navbar-form navbar-left navbar-search-form',
				    'role'	=>  "search"
				]);
            ?>
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" name="q" value="" class="form-control" placeholder="Recherche ici...">
            </div>
            <?php echo $this->Form->end(); ?>
          </div>
    </div>
</nav>
