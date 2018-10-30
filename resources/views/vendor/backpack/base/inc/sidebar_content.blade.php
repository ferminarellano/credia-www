<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
	<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
	
	<li class="treeview">
		<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Backgrounds</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><a href="{{ backpack_url('slider') }}"><i class="fa fa-picture-o"></i> <span>Slider</span></a></li>
		</ul>
	</li>
	
	<li class="treeview">
		<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Voluntariado</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><a href="{{ backpack_url('voluntario') }}"><i class="fa fa-plus-circle"></i> <span>Voluntarios</span></a></li>
			<li><a href="{{ backpack_url('actividad') }}"><i class="fa fa-dot-circle-o"></i> <span>Actividades</span></a></li>
		</ul>
	</li>
	
	<li class="treeview">
		<a href="#"><i class="fa fa-folder" aria-hidden="true"></i> <span>Contacto</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><a href="{{ backpack_url('contacto') }}"><i class="fa fa-envelope"></i> <span>Mensajes</span></a></li>
		</ul>
	</li>
	
	<li class="treeview">
		<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Redes sociales</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><a href="{{ backpack_url('social') }}"><i class="fa fa-tasks"></i> <span>Social</span></a></li>
		</ul>
	</li>
	