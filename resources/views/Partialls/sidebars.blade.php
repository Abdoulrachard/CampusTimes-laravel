@php
$route = Route::currentRouteName()
@endphp
<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>
		<span class="text">Campustimes</span>
	</a>
	<ul class="side-menu top">
		<li @class(['', 'active' => str_starts_with($route , 'student.dash')])>
			<a href="/">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li  @class(['', 'active' => $route === 'student.timetable.index'])>
			<a href="{{ route('student.timetable.index') }}">
				<i class='bx bxs-calendar' ></i>
				<span class="text">Emplois du Temps</span>
			</a>
		</li>
		<li @class(['', 'active' => str_starts_with($route , 'faq.')])>
			<a href="{{ route('faq.index') }}">
				<i class='bx bxs-help-circle' ></i>
				<span class="text">FAQ</span>
			</a>
		</li>
		
	</ul>
	<ul class="side-menu">
		<li @class(['', 'active' => str_starts_with($route , 'sitting.')])>
			<a href="#">
				<i class='bx bxs-cog' ></i>
				<span class="text">Mon compte</span>
			</a>
		</li>
	</ul>
</section>