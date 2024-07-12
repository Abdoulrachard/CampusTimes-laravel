<nav class="shadow-sm">
	<i class='bx bx-menu' ></i>
	<form action="#">
		<div class="form-input">
			<input type="search" placeholder="Search...">
			<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
		</div>
	</form>
	{{-- <input type="checkbox" id="switch-mode" hidden>
	<label for="switch-mode" class="switch-mode"></label> --}}
	
	<div style="" class="profil-container d-flex align-items-center   mx-2    " >
		<a href="#" class="notification mx-4">
			<i class='bx bxs-bell' ></i>
			<span class="num">1</span>
		</a>
		<a href="#" class="profile" style="margin-right:15px;">
			<img src="{{ Auth::user()->profil() }}" alt="">
		</a>
		<div class="profil-info d-flex  " style="">
			<div class="d-flex justify-content-center   " style="flex-direction: column;margin:auto;">
				<span><h6>{{ Auth::user()->lastname }} {{ Auth::user()->firstname }}</h6></span>
				<span class="small align-self-center" style="color: blueviolet">
					{{ Auth::user()->role->label }}
				</span>
			</div>
			
		</div>
		<form id="disconnect-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
			@method('delete')
			@csrf
		</form>
		<a href="#" id="logout-link" class="logout mx-3" style="cursor: pointer;">
			<i class='bx bx-log-in logout-btn' style="font-size: 20px"></i>
		</a>
	</div>
	
</nav>