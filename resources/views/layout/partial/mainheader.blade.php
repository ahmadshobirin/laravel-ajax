<header class="main-header">
	<!-- Logo -->
	<a href="#!" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini">
		<b>LAJ</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg">
		LARA<b>JAX</b></span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
					<span class="hidden-xs">uwuwu</span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

						<p>
							uwuwu
						</p>
					</li>
					<!-- Menu Body -->
					{{-- <li class="user-body">

					</li> --}}
					<!-- Menu Footer-->
					<li class="user-footer">
						{{-- <div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
						</div> --}}
						<div class="pull-right">
							{{-- <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Keluar
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
								<input type="submit" value="logout" style="display: none;">
							</form> --}}
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
			{{-- <li>
				<a href="#" data-toggle="control-sidebar">
					<i class="fa fa-gears"></i>
				</a>
			</li> --}}
		</ul>
		</div>
	</nav>
</header>