<html>
	<head>
		<title>UC-Systems AlertTool</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">UC-Systems</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
        <?php if(!$this->session->userdata('logged_in')) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>users/register">Registreren</a>
          </li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>tickets">Tickets</a>
      </li>
    <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
=======
<<<<<<< HEAD
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
=======

        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>

        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Registreren</a>

>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
      </li>
        <?php endif; ?>
  </ul>
  </div>
</nav>

<div class='container'>
  <!-- Flash messages -->
  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-succes">'.$this->session->flashdata('user_registered').'</p>'; ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
  <?php endif; ?>