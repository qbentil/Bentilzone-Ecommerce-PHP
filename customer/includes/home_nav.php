<nav class="navbar navbar-default navbar-expand-xl navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="index.php"><i class="fa fa-shopping-basket ml-2 p-1 text-primary"></i><b>BentilZone</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
        <li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Categories<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<?php  display("main_cat", "category_name", "cat_id"); ?>
					<!-- <li class="divider dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Sub Categories<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php  display("sub_cat", "subcat_name", "subcat_id"); ?>
					<!-- <li class="divider dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Gift For Her<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>Roses</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Perfumes</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Costmetic</a></li>
					<!-- <li class="divider dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">GIft for Him<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>T-Shirt</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i>Watches</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Shoes</a></li>
					<!-- <li class="divider dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Anniversary<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>T-Shirt</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i>Watches</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Shoes</a></li>
					<!-- <li class="divider dropdown-divider"></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="#" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
		</ul>
        <!-- <form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons fa  fa-search"></i></span>
			</div>
		</form> -->
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="index.php?wishlist" class="nav-link notifications"><i class="fa fa-heart"></i><span class="badge"><?php cartCount("wishlist"); ?></span></a></li>
			<li class="nav-item"><a href="index.php?showcart" class="nav-link messages"><i class="fa fa-shopping-cart"></i><span class="badge"><?php cartCount("cart"); ?></span></a></li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?php echo '../images/customers/'.$img ?>" class="avatar" alt="Avatar"><strong> <?php echo $_SESSION['name'] ?></strong><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>View Profile</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Change Password</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Contact Admin</a></li>
					<li class="divider dropdown-divider"></li>
                    <li><a href="index.php?storelogin" class="dropdown-item"><i class="material-icons fa fa-building"></i>Login to Store</a></li>
                    <li><a href="index.php?logout" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Sign Out</a></li>
                    <!-- <li><a href="store_login.php" class="dropdown-item"><i class="material-icons fa fa-sign-in"></i>Store Login</a></li> -->
                    <!-- <li><a href="newstore.php" class="dropdown-item"><i class="material-icons fa fa-sliders"></i>Create Store</a></li> -->
				</ul>
			</li>
		</ul>
	</div>
</nav>