<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse slimscrollsidebar">
		<div class="user-profile">
			<div class="dropdown user-pro-body">
				<div><img src="{{ asset('plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"></div>
				<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
						<ul class="dropdown-menu animated flipInY">
							<li><a href="{{ route('admin.profile.index') }}"><i class="ti-user"></i> My Profile</a></li>
							<li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
							<li><a href="#"><i class="ti-email"></i> Inbox</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" onclick="document.getElementById('logout').submit()"><i class="fa fa-power-off"></i> Logout</a></li>
						</ul>
			</div>
		</div>
		<ul class="nav" id="side-menu">
			<li class="sidebar-search hidden-sm hidden-md hidden-lg">
				<!-- input-group -->
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
					<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
					</span> </div>
				<!-- /input-group -->
			</li>

			<li><div class="hide-menu t-earning"><div id="sparkline2dash" class="m-b-10"></div><small class="db">TOTAL EARNINGS - JUNE 2016</small><h3 class="m-t-0 m-b-0">$2,478.00</h3></div>
			</li>
			<li class="nav-small-cap m-t-10">--- Main Menu</li>
			<li><a href="{{ route('admin.dashboard.index') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="a"></i> <span class="hide-menu">Dashboard</span></a></li>
			<li> <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> E-commerce <span class="fa arrow"></span></span></a>
				<ul class="nav nav-second-level">
					<li> <a href="{{ route('admin.brands.index') }}">Kelola Brand</a> </li>
					<li> <a href="{{ route('admin.categories.index') }}">Kelola Kategori</a> </li>
					<li> <a href="{{ route('admin.products.index') }}">Kelola Produk</a> </li>
				</ul>
			</li>
			<li><a href="{{ route('admin.kelola-admin.index') }}" class="waves-effect"><i class="icon-user fa-fw"></i> <span class="hide-menu">Kelola Admin</span></a></li>
			<li><a href="#" onclick="document.getElementById('logout').submit()" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
		</ul>
	</div>
</div>
{!! Form::open(['url' => 'admin/logout', 'method' => 'post', 'id' => 'logout']) !!}
{!! Form::close() !!}