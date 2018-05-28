<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d4dd48c5640d0d1515f3406dc2a3781ab9794742
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form group">
				<label>Name</label>
				<input type ="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form group">
				<label>Zipcode</label>
				<input type ="text" class="form-control" name="zipcode" placeholder="Zipcode">
			</div>
			<div class="form group">
				<label>email</label>
				<input type ="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form group">
				<label>Username</label>
				<input type ="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form group">
				<label>Password</label>
				<input type ="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form group">
				<label>Confirm Password</label>
				<input type ="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type ="submit" class ="btn btn-primary">Submit</button>
		</div>
	</div>
<<<<<<< HEAD
=======
=======
<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="form group">
		<label>Name</label>
		<input type ="text" class="form-control" name="name" placeholder="Name">
	</div>
	<div class="form group">
		<label>Zipcode</label>
		<input type ="text" class="form-control" name="zipcode" placeholder="Zipcode">
	</div>
	<div class="form group">
		<label>email</label>
		<input type ="email" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form group">
		<label>Username</label>
		<input type ="text" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form group">
		<label>Password</label>
		<input type ="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form group">
		<label>Confirm Password</label>
		<input type ="password" class="form-control" name="password2" placeholder="Confirm Password">
	</div>
	<button type ="submit" class ="btn btn-primary">Submit</button>
>>>>>>> 9495bd2f6ccc84d3ed28d3d0b73361066f9205ab
>>>>>>> d4dd48c5640d0d1515f3406dc2a3781ab9794742
<?php echo form_close(); ?>