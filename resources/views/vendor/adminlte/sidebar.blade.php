<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="{{ asset('sithu-adminlte/imgs/profile.jpg') }}" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Admin</p>
					<!-- Status -->
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">HEADER</li>
				<!-- Optionally, you can add icons to the links -->
				<li class="active"><a href="{{ url('/admin') }}"><i class="fa fa-link"></i> <span>HOME</span></a></li>
				<li><a href="{{ route('savehouse.index') }}"><i class="fa fa-link"></i> <span>Savehouse</span></a></li>
				<li><a href="{{ route('foundation.index') }}"><i class="fa fa-link"></i> <span>Foundation</span></a></li>
				<li><a href="{{ route('organization.index') }}"><i class="fa fa-link"></i> <span>Organization</span></a></li>
				<li><a href="{{ route('thadin.index') }}"><i class="fa fa-link"></i> <span>Thadin</span></a></li>
				<li class="treeview">
					<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#">Link in level 2</a></li>
						<li><a href="#">Link in level 2</a></li>
					</ul>
				</li>
			</ul>
			<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>