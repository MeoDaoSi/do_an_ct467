<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="info">
						<a href="" class="d-block"><?php echo $_SESSION['username'] ?></a>
					</div>
				</div>
				<!-- <div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
						<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
						</button>
						</div>
					</div>
				</div> -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
							<p>
							Bảng
							<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
							<a href="../films" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Quản lý Phim</p>
							</a>
							</li>
						</ul>
						</li>
					</ul>
				</nav>
			</div>
		</aside>