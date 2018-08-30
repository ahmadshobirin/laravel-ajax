<!DOCTYPE html>
<html>
	@include('layout.partial.htmlheader')
	<body class="hold-transition skin-purple sidebar-mini">
		<!-- Site wrapper -->
			<div class="wrapper">

				<!-- header -->
				@include('layout.partial.mainheader')
				<!-- =============================================== -->

				<!-- Left side column. contains the sidebar -->
				@include('layout.partial.sidebar')
				<!-- =============================================== -->

				<!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					@include('layout.partial.contentheader')

					<!-- Main content -->
					<section class="content">
						@yield('main-content')
					</section>
				<!-- /.content -->
				</div>
				<!-- /.content-wrapper -->

				@include('layout.partial.footer')

				<!-- Control Sidebar -->
				@include('layout.partial.sidebar-right')
			</div>
		<!-- ./wrapper -->

		@include('layout.partial.scripts')
	</body>

</html>