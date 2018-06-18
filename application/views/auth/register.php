<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i>
			</a>

			<a class="brand" href="index.html">
				PCS
			</a>

			<div class="nav-collapse collapse navbar-inverse-collapse">

				<ul class="nav pull-right">

					<li><a href="<?= site_url('auth/login');?>">
						Signin
					</a></li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div><!-- /navbar -->

<Br>
<div class="container">
	<h4 class="well">Registration Form</h4>
	<div class="col-lg-12 ">
				<?php if (!empty(@$notif)): ?>
				<div class="alert alert-<?= @$notif['type']; ?>">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<p><?= @$notif['message']; ?></p> 
				</div>					
				<?php endif ?>
		<div class="row">

			<form name="userform" method="post" class="form-horizontal row-fluid">
				
				<div class="control-group">
					<label class="control-label" for="firstname">First Name</label>
					<div class="controls">
						<input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?= $this->input->post('firstname'); ?>"  class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="middlename">Middle Name</label>
					<div class="controls">
						<input type="text" id="middlename" name="middlename" placeholder="Middle Name" value="<?= $this->input->post('middlename'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="lastname">Last Name</label>
					<div class="controls">
						<input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?= $this->input->post('lastname'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="lastname">Email</label>
					<div class="controls">
						<input type="email" id="email" name="email" placeholder="Last Name" value="<?= $this->input->post('email'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" id="username" name="username" placeholder="Username" value="<?= $this->input->post('username'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" id="password" name="password" placeholder="Password" value="<?= $this->input->post('password'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="confirmpass">Confirm Password</label>
					<div class="controls">
						<input type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" value="<?= $this->input->post('confirmpass'); ?>" class="span8">
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-info">Submit Form</button>
				</div>
			</form>		

		</div>
	</div>
</div>



