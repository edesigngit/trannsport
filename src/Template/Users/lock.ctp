<div class="wrapper wrapper-full-page">

    <div class="full-page lock-page" data-color="azure" data-image="/img/samples/anosy.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
	    
	        <?= $this->Flash->render('auth') ?>

            <?= $this->Form->create() ?>
                <div class="user-profile">
                    <div class="author">
                        <img class="avatar" src="https://octodex.github.com/images/labtocat.png" alt="...">
                    </div>
                    <h4><?php echo $this->request->session()->read('Auth.User.full_name');?></h4>

                    <div class="form-group">
                        <?= $this->Form->input('password', ['placeholder' => "Enter password", 'class' => "form-control", 'label' => false]) ?>
                    </div>

                    <?= $this->Form->button(__('Unlock'), ['type' => "submit", 'class' => "btn btn-fill btn-round btn-fil btn-wd btn-warning"]); ?>

                </div>
            <?= $this->Form->end() ?>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                        <!--        here you can add more links for the footer                       -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="#">BE ONE</a>
                </p>
            </div>
        </footer>

    </div>

</div>
