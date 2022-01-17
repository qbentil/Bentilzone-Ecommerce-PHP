<nav class="navbar navbar-default navbar-expand-xl navbar-static-top navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="index.php"><i class="fa fa-shopping-basket ml-2 p-1"></i><b>BentilZone</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav text-default">
        <li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Categories<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php  display("main_cat", "category_name", "cat_id"); ?>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Subcategories<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php  display("sub_cat", "subcat_name", "subcat_id"); ?>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Gift For Her<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>Roses</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Perfumes</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Costmetic</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Gift for Him<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>T-Shirt</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i>Watches</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Shoes</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Anniversary<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-gift"></i>Birthday</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i>Valentine</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-graduation-cap"></i>Graduation</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Fashion<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i>Ladies Wear</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i>Gents Wear</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i>Kids Wear</a></li>
				</ul>
			</li>
		</ul>
        <!-- <form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control text-info" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons fa  fa-search"></i></span>
			</div>
		</form> -->
		<ul class="nav navbar-nav ml-5">
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">User Account<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="login.php" class="dropdown-item"><i class="fa fa-sign-in"></i>Sign In</a></li>
					<li><a href="Register.php" class="dropdown-item" ><i class="fa fa-user-o"></i> Sign Up</a></li>
					<li><a href="admin_login.php" class="dropdown-item"><i class="fa fa-user"></i>Administrator</a></li>
					<li class="divider dropdown-divider"></li>
                    <li><a href="store_login.php" class="dropdown-item" ><i class="material-icons fa fa-sign-in"></i>Store Login</a></li>
                    <li><a href="new_store.php" class="dropdown-item"><i class="material-icons fa fa-home"></i>Create Store</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>

