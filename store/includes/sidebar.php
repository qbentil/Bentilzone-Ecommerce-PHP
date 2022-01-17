<nav id="sidebar">
			<div class="sidebar-header">
				<h5><span class = "fa fa-shopping-basket fa-fw mr-1"></span>BENTILZONE</h5>
				<small class = "text-uppercase"><?php echo $brand; ?></small>
			</div>
			
			
			<ul class="list-unstyled components">
				<li class="sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
					<small>STORE DASHBOARD</small>
				</li>
				<li class="active">
					<a href="index.php" class=" list-group-item ">
						<div class="d-flex w-100 justify-content-start align-items-center">
							<span class="fa fa-bar-chart fa-fw mr-3"></span>
							<span class="menu-collapsed">Statistics</span>
						</div>
					</a>
				</li>
				<li class="">
					<a href="#products" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="fa fa-shopping-basket fa-fw mr-3 text-success"></span>
						Products
					</a>
					<ul class="collapse list-unstyled" id="products">
						<li>
							<a href="index.php?add_product">
							<span class="fa fa-plus fa-fw mr-3"></span>
								<span class="menu-collapsed">Add New Product</span>
							</a>
						</li>
						<li>
							<a href="index.php?view_products">
							<span class="fa fa-shopping-cart fa-fw mr-3 text-success"></span>
								<span class="menu-collapsed">VIew all Products</span>
							</a>
						</li>
						<li>
							<a href="index.php?outofstock_pro">
							<span class="fa fa-question-circle fa-fw mr-3 text-danger"></span>
								<span class="menu-collapsed">Out of Stock Products</span>
							</a>
						</li>
						<li>
							<a href="index.php?ondemand_pro">
							<span class="fa fa-exclamation-circle fa-fw mr-3 text-warning"></span>
								<span class="menu-collapsed">On Demand Products</span>
							</a>
						</li>
						<li>
							<a href="index.php?wishlist_pro">
								<span class="fa fa-heart fa-fw mr-3 text-danger"></span>
									<span class="menu-collapsed">Wishlist Products</span>
								</a>
						</li>
					</ul> 
				</li>
				
				<li class="">
					<a href="#info" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="fa fa-th-list fa-fw mr-3 text-info"></span>
						Categories
					</a>
					<ul class="collapse list-unstyled" id="info">
						<li>
							<a href="index.php?view_categories">
							<span class="fa fa-th-list fa-fw mr-3 text-success"></span>
								<span class="menu-collapsed">VIew Categories</span>
							</a>
						</li>
						<li>
							<a href="index.php?view_sub_categories">
							<i class="fa fa-th-large fa-fw mr-3 text-warning"></i>
								<span class="menu-collapsed">VIew Sub Categories</span>
							</a>
						</li>
						<li>
							<a href="index.php?add_category">
							<span class="fa fa-plus fa-fw mr-3 text-danger"></span>
								<span class="menu-collapsed">Add Category</span>
							</a>
						</li>
						<li>
							<a href="index.php?add_subcategory">
							<span class="fa fa-plus fa-fw mr-3 text-info"></span>
								<span class="menu-collapsed">Add Sub Category</span>
							</a>
						</li>
					</ul> 
				</li>
				<li class="">
					<a href="#categories" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="fa fa-cogs fa-fw mr-3 text-warning"></span>
						Store Info
					</a>
					<ul class="collapse list-unstyled" id="categories">
						<li>
							<a href="index.php?storeprofile">
								<span class="fa fa-user fa-fw mr-3 text-primary"></span>
								<span class="menu-collapsed">Update Store Info</span>
							</a>
						</li>
						<li>
							<a href="index.php?change_password">
								<span class="fa fa-lock fa-fw mr-3 text-danger"></span>
								<span class="menu-collapsed">Change Password</span>
							</a>
						</li>
					</ul> 
				</li>
	
				<li class="">
					<a href="#orders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<span class="fa fa-tag fa-fw mr-3 text-primary"></span>
						Orders
					</a>
					<ul class="collapse list-unstyled" id="orders">
						<li>
							<a href="index.php?complete_orders">
							<span class="fa fa-check fa-fw mr-3 text-success"></span>
								<span class="menu-collapsed">Complete Orders</span>
							</a>
						</li>
						<li>
							<a href="index.php?pending_orders">
							<span class="fa fa-refresh fa-fw mr-3 text-warning"></span>
								<span class="menu-collapsed">Pending Orders</span>
							</a>
						</li>
						<li>
							<a href="index.php?cancelled_orders">
							<i class="fa fa-times fa-fw mr-3 text-danger"></i>
								<span class="menu-collapsed">Cancelled Orders</span>
							</a>
						</li>
						<li>
							<a href="index.php?total_orders">
							<i class="fa fa-tags fa-fw mr-3 text-primary"></i>
								<span class="menu-collapsed">Total Orders</span>
							</a>
						</li>
					</ul> 
				</li>
				<li class="sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
					<small>OPTIONS</small>
				</li>
				<li>
					<a href="#">
						<div class="d-flex w-100 justify-content-start align-items-center">
							<span class="fa fa-bell fa-fw mr-3 text-danger"></span>
							<span class="menu-collapsed">Notifications<span class="badge badge-pill badge-primary ml-2">5</span></span>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="d-flex w-100 justify-content-start align-items-center">
							<span class="fa fa-calendar fa-fw mr-3 text-info"></span>
							<span class="menu-collapsed">Calendar</span>
						</div>
					</a>
				</li>
				<li>
					<a href="index.php?contact_admin">
						<div class="d-flex w-100 justify-content-start align-items-center">
							<span class="fa fa-question fa-fw mr-3 text-success"></span>
							<span class="menu-collapsed">Help</span>
						</div>
					</a>
				</li>
			</ul>
			<ul class="list-unstyled components">
				<li>
					<a href="index.php?logout">
						<div class="d-flex w-100 justify-content-start align-items-center">
							<span class="fa fa-sign-out fa-fw mr-3 text-success"></span>
							Sign Out
						</div>
					</a>
				</li>
			</ul>
	<!-- 		
			<ul class="list-unstyled CTAs">
				<li>
					<a href="#" class="download">Download code</a>
				</li>
				<li>
					<a href="#" class="article">article</a>
				</li>
			</ul> -->
		</nav>