        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
            <a href="{{ url('admin/dashboard') }}">
    

                <span class="brand-name text-truncate">Dashboard</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
			  	<li  class="has-sub  {{ ($currentAdminMenu == 'supplier') ? 'expand active' : ''}}" >
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#supplier"
						aria-expanded="false" aria-controls="supplier">
						<i class="mdi mdi-account-multiple"></i>
						<span class="nav-text">Supplier</span> <b class="caret"></b>
					</a>
					<ul  class="collapse  {{ ($currentAdminMenu == 'supplier') ? 'show' : ''}}"  id="supplier"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'supplier') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/suppliers')}}">
								<span class="nav-text">Data Supplier</span>
								</a>
							</li>
						</div>
					</ul>
				</li>
				<li  class="has-sub  {{ ($currentAdminMenu == 'catalog') ? 'expand active' : ''}}" >
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#catalog"
						aria-expanded="false" aria-controls="catalog">
						<i class="mdi mdi-view-dashboard-outline"></i>
						<span class="nav-text">Catalog</span> <b class="caret"></b>
					</a>
					<ul  class="collapse  {{ ($currentAdminMenu == 'catalog') ? 'show' : ''}}"  id="catalog"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'product') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/products')}}">
								<span class="nav-text">Products</span>
								</a>
							</li>
							<li class="{{ ($currentAdminSubMenu == 'category') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/categories')}}">
								<span class="nav-text">Categories</span>
								</a>
							</li>
							<!-- <li class="{{ ($currentAdminSubMenu == 'attribute') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/attributes')}}">
								<span class="nav-text">Attributes</span>
								</a>
							</li> -->
						</div>
					</ul>
				</li>
				<li  class="has-sub  {{ ($currentAdminMenu == 'stock') ? 'expand active' : ''}}" >
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#stock"
						aria-expanded="false" aria-controls="stock">
						<i class="mdi mdi-folder"></i>
						<span class="nav-text">Manage Stock</span> <b class="caret"></b>
					</a>
					<ul  class="collapse  {{ ($currentAdminMenu == 'stock') ? 'show' : ''}}"  id="stock"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'add_stock') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/addstocks')}}">
								<span class="nav-text">Stock In</span>
								</a>
							</li>
						</div>
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'outcoming_stock') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/outcomingstocks')}}">
								<span class="nav-text">Stock Out</span>
								</a>
							</li>
						</div>
					</ul>
				</li>
				<li  class="has-sub {{ ($currentAdminMenu == 'order') ? 'expand active' : ''}}">
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#orders"
						aria-expanded="false" aria-controls="orders">
						<i class="mdi mdi-cart-outline"></i>
						<span class="nav-text">Orders</span> <b class="caret"></b>
					</a>
					<ul class="collapse {{ ($currentAdminMenu == 'order') ? 'show' : ''}}"  id="orders"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'order') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/orders')}}">
								<span class="nav-text">Orders</span>
								</a>
							</li>
							<!-- <li class="{{ ($currentAdminSubMenu == 'trashed-order') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/orders/trashed')}}">
								<span class="nav-text">Trashed</span>
								</a>
							</li> -->
							<!-- <li class="{{ ($currentAdminSubMenu == 'shipment') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/shipments')}}">
								<span class="nav-text">Shipments</span>
								</a>
							</li> -->
						</div>
					</ul>
				</li>
				<li  class="has-sub {{ ($currentAdminMenu == 'report') ? 'expand active' : ''}}">
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#report"
						aria-expanded="false" aria-controls="report">
						<i class="mdi mdi-signal-cellular-outline"></i>
						<span class="nav-text">Reports</span> <b class="caret"></b>
					</a>
					<ul class="collapse {{ ($currentAdminMenu == 'report') ? 'show' : ''}}"  id="report"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'report-revenue') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/reports/revenue')}}">
								<span class="nav-text">Income</span>
								</a>
							</li>
							<li  class="{{ ($currentAdminSubMenu == 'report-stock-in') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/reports/stock-in')}}">
								<span class="nav-text">Stock In</span>
								</a>
							</li>
							<li  class="{{ ($currentAdminSubMenu == 'report-stock-out') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/reports/stock-out')}}">
								<span class="nav-text">Stock Out</span>
								</a>
							</li>
							<li  class="{{ ($currentAdminSubMenu == 'report-inventory') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/reports/inventory')}}">
								<span class="nav-text">Inventories</span>
								</a>
							</li>
						</div>
					</ul>
				</li>
				<li  class="has-sub {{ ($currentAdminMenu == 'general') ? 'expand active' : ''}}">
					<!-- <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#general"
						aria-expanded="false" aria-controls="general">
						<i class="mdi mdi-settings"></i>
						<span class="nav-text">General</span> <b class="caret"></b>
					</a> -->
					<ul class="collapse {{ ($currentAdminMenu == 'general') ? 'show' : ''}}"  id="general"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'slide') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/slides')}}">
								<span class="nav-text">Slides</span>
								</a>
							</li>
						</div>
					</ul>
				</li>
				<li  class="has-sub {{ ($currentAdminMenu == 'role-user') ? 'expand active' : ''}}">
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
						aria-expanded="false" aria-controls="auth">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Users </span> <b class="caret"></b>
					</a>
					<ul class="collapse {{ ($currentAdminMenu == 'role-user') ? 'show' : ''}}"  id="auth"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}" >
								<a class="sidenav-item-link" href="{{ url('admin/users')}}">
								<span class="nav-text">Users</span>
								</a>
							</li>
							<!-- <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}">
								<a class="sidenav-item-link" href="{{ url('admin/roles')}}">
								<span class="nav-text">Roles</span>
								</a>
							</li> -->
						</div>
					</ul>
				</li>             
			</ul>             
        </aside>