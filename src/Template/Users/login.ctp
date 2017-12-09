
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="azure" data-image="/img/samples/anosy.jpg"> 
    
    	<!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" --> 
		<div class="content">
			<div class="container">
				
			    <div class="row">
				                      
			        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
				        <?= $this->Flash->render('auth') ?>
				        <?= $this->Form->create() ?> 
				            
			            <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
			                <div class="card card-hidden">
				                
			                    <div class="header text-center">Login</div>
			                    <div class="content">
			                        <div class="form-group">
			                            <label>Username <star>*</star></label>
			                            <?= $this->Form->input('username', ['placeholder' => "Enter username", 'class' => "form-control", 'label' => false, "required" => "true"]) ?>
			                        </div>
			                        <div class="form-group">
			                            <label>Password <star>*</star></label>
			                            <?= $this->Form->input('password', ['placeholder' => "Enter password", 'class' => "form-control", 'label' => false, "required" => "true"]) ?>
			                        </div>                                    
			                       
			                    </div>
			                    <div class="footer text-center">
			                        <?= $this->Form->button(__('Login'), ['type' => "submit", 'class' => "btn btn-fill btn-warning btn-wd"]); ?>
			                    </div>
			                </div>
			                  
			            <?= $this->Form->end() ?> 
			               
			        </div>                    
			    </div>
			    
			</div>
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