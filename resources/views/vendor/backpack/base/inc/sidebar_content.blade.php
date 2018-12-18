@if(Auth::check())
	
	<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
	
	@role('Super Administrador')
		<li class="header">SISTEMA DE MONITOREO</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Indicadores</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('fuente') }}"><i class="fa fa-copyright"></i> <span>Fuentes</span></a></li>
				<li><a href="{{ backpack_url('indicador') }}"><i class="fa fa-line-chart"></i> <span>Indicadores</span></a></li>
				<li><a href="{{ backpack_url('dataindicador') }}"><i class="fa fa-pencil-square-o"></i> <span>Igreso de datos</span></a></li>
				<li><a href="{{ backpack_url('institucion') }}"><i class="fa fa-building"></i> <span>Instituciones</span></a></li>
				<li><a href="{{ backpack_url('unidadmedida') }}"><i class="fa fa-percent"></i> <span>Unidades de medida</span></a></li>
			</ul>
		</li>
	@endrole
		
	@role('Super Administrador|Administrador Web')
		<li class="header">CONFIGURACIÓN PÁGINA</li>
	
		<li class="treeview">
			<a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('actividad') }}"><i class="fa fa-dot-circle-o"></i> <span>Actividades</span></a></li>
				<li><a href="{{ backpack_url('banner') }}"><i class="fa fa-picture-o"></i> <span>Banner</span></a></li>
				<li><a href="{{ backpack_url('categoria') }}"><i class="fa fa-tasks"></i> <span>Categorías</span></a></li>
				<li><a href="{{ backpack_url('equipo') }}"><i class="fa fa-users"></i> <span>Equipo de trabajo</span></a></li>
				<li><a href="{{ backpack_url('faq') }}"><i class="fa fa-question-circle-o"></i> <span>Preguntas frecuentes</span></a></li>
				<li><a href="{{ backpack_url('contacto') }}"><i class="fa fa-envelope"></i> <span>Mensajes de contacto</span></a></li>
				<li><a href="{{ backpack_url('patrocinador') }}"><i class="fa fa-handshake-o"></i> <span>Patrocinadores</span></a></li>
				<li><a href="{{ backpack_url('social') }}"><i class="fa fa-share-alt"></i> <span>Redes sociales</span></a></li>
			</ul>
		</li>
	@endrole
		
	@role('Super Administrador|Administrador Web|Creador de articulos|Editor de articulos')
		<li class="treeview">
			<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('blog') }}"><i class="fa fa-plus-circle"></i> <span>Artículos</span></a></li>
			</ul>
		</li>
	@endrole
		
	@role('Super Administrador|Administrador Web')
		<li class="treeview">
			<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Eventos</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('evento') }}"><i class="fa fa-calendar-plus-o"></i> <span>Eventos</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-suitcase" aria-hidden="true"></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('proyecto') }}"><i class="fa fa-folder"></i> <span>Proyectos</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> <span>Sistemas</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('sistema') }}"><i class="fa fa-external-link-square"></i> <span>sistemas</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Voluntariado</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('voluntario') }}"><i class="fa fa-envelope"></i> <span>Mensajes de voluntarios</span></a></li>
				<li><a href="{{ backpack_url('fotovoluntario') }}"><i class="fa fa-users"></i> <span>Voluntarios</span></a></li>
			</ul>
		</li>
	@endrole
	
	@role('Super Administrador')
		<li class="header">CONFIGURACIÓN GENERAL</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-group"></i> <span>Gestión de usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
				<li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
			</ul>
		</li>
	@endrole
	
	<li class="header">{{ trans('backpack::base.user') }}</li>
	<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
@endif