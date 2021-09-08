<div id="app">
	<div id="sidebar" class="active">
		<div class="sidebar-wrapper active">
			<div class="sidebar-header">
				<div class="d-flex justify-content-between">
					<div class="toggler">
	                    <a href="#" class="sidebar-hide d-xl-none d-block" ><i class="bi bi-x bi-middle"></i></a>
	                </div>
				</div>
			</div>
			<div class="sidebar-menu">
				<ul class="menu">
					<div class="sidebar-title">
						<h1>Menu</h1>
					</div>
					<li class="sidebar-item">
						<a href="{{ route('warga') }}" class="sidebar-link">
							<span>RW</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a href="{{ route('wargart') }}" class="sidebar-link">
							<span>RT</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		<header class="mb-3">
			<a href="#" class="burger-btn d-block d-xl-none">
				<i class="bi bi-justify fs-3"></i>
			</a>
		</header>
		@yield('content')
	</div>
</div>