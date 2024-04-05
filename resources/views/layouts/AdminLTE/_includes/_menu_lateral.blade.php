<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header" style="color:#fff;"> MENU <i class="fa fa-level-down"></i></li>
			{{-- <li class=" ">
				<a href="{{ route('home') }}" title="Dashboard"><i class="fa fa-dashboard"></i> <span>Tablero</span></a>
			</li> --}}

			@if(Request::segment(1) === 'profile')
			<li class="{{ Request::segment(1) === 'profile' ? 'active' : null }}">
				<a href="{{ route('profile') }}" title="Profile"><i class="fa fa-user"></i> <span> PERFILES</span></a>
			</li>

			@endif
			<li class="treeview">
				<a href="#"><i class="fa fa-group"></i><span>Proveedores</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="provider">
						<a href="{{ route('proveedores.index') }}" title="Proveedor">
							<span>Proveedores</span>
						</a>
					</li>
				</ul>
				<li class="treeview">
					<a href="#"><i class="fa fa-group"></i><span>Clientes</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
					<ul class="treeview-menu">
						<li class="cliente">
							<a href="{{ route('clientes.index') }}" title="Cliente">
								<span> Cliente</span>
							</a>
						</li>
					</ul>
				</li>
			<li class="treeview">
				<a href="#"><i class="fa fa fa-shopping-basket"></i><span>Articulos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="articulo">
						<a href="{{ route('articulos.index') }}" title="Articulo">
							<i class="fa-solid fa-cart-shopping"></i> <span>Articulos</span>
						</a>
					</li>
                    <li class="provider">
						<a href="{{ route('recepciones.index') }}" title="Marca">
							<span>Recepciones</span>
						</a>
					</li>
					<li class="provider">
						<a href="{{ route('ajustesdeinventario.index') }}" title="Marca">
							<span>Ajustes de Inventario</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-tag"></i><span>Ventas</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="provider">
						<a href="{{ route('ventas.index') }}" title="Marca">
							<span>Ventas</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-gear"></i><span>Configuracion</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					{{-- @if (Auth::user()->can('root-dev', '')) --}}
						<li class="{{ Request::segment(1) === 'config' && Request::segment(2) === null ? 'active' : null }}">
							<a href="{{ route('config') }}" title="App Config">
								<i class="fa fa-gear"></i> <span> Configuracion</span>
							</a>
						</li>
					{{-- @endif --}}
					<li class="user">
						<a href="{{ route('user') }}" title="Users">
							<i class="fa fa-user"></i> <span> Usuarios</span>
						</a>
					</li>
                    
				</ul>
			</li>
		</ul>
	</section>
</aside>
