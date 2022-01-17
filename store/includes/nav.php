<style>
	.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
	}
	.navbar .dropdown-item .fa {
	font-size: 16px;
	min-width: 22px;
	color: #fff !important;
	}
	.dropdown-menu{
	padding-top: 0%;
	width: 25% !important;
	padding-bottom: 1%;
	border: none;
	font-weight: bold;
	background: #0d065a !important;
	font-size: .9rem;
	transition: .5s;
	}
	.dropdown-menu a{
		color: #33cabb !important;
	}
	.dropdown-menu a:hover{
		font-weight: bold;
		text-decoration: none;
		color: #fff !important;
		background: #33cabb;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .nav .dropdown-menu li {
		color: #fff;
		font-weight: normal;
	}
	/* .navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
		padding: 8px 20px;
		line-height: normal;
	} */
</style>
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<button type="button" id="sidebarCollapse" class="btn btn-info btn-collapse">
		<i class="fa fa-align-justify"></i>
		</button>
		<button class="navbar-toggler btn btn-info btn-collapse" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
		<i class="fa fa-align-justify"></i>
		</button>
		<div class="collapse navbar-collapse" id="nvbCollapse">
			<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item active pl-1">
					<a class="nav-link" href="#"><i class="fa fa-globe fa-fw mr-1"></i>Website</a>
				</li> -->
				<li class="nav-item pl-1">
					<a class="nav-link" href="#"><i class="fa fa-home fa-fw mr-1"></i>Store Profile</a>
				</li>
				<li class="nav-item pl-1">
					<a class="nav-link" href="#"><i class="fa fa-level-up fa-fw mr-1"></i>Upgrade Store</a>
				</li>
				<!-- <li class="nav-item pl-1">
					<a class="nav-link" href="#"><i class="fa fa-sign-in fa-fw mr-1"></i>Sign Out</a>
				</li> -->
				<li class="nav-item pl-1 dropdown">
					<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?php echo '../images/brands/'.$logo ?>" class="avatar" alt="Avatar"><?php echo $brand; ?></a>
					<ul class="dropdown-menu">
						<li><a href="#" class="nav-link"><i class="fa fa-user-o"></i>View Profile</a></li>
						<li><a href="#" class="nav-link"><i class="fa fa-calendar-o"></i> Change Password</a></li>
						<li><a href="#" class="nav-link"><i class="fa fa-sliders"></i>Contact Admin</a></li>
						<li class="divider dropdown-divider"></li>
						<li><a class="nav-link" href="index.php?logout"><i class="fa fa-sign-in fa-fw mr-1"></i>Sign Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
	<!--# Navbar #-->