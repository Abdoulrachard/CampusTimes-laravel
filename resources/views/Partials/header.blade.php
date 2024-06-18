<nav class="shadow-sm">
	<i class='bx bx-menu' ></i>
	<form action="#">
		<div class="form-input">
			<input type="search" placeholder="Search...">
			<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
		</div>
	</form>
	<input type="checkbox" id="switch-mode" hidden>
	<label for="switch-mode" class="switch-mode"></label>
	<a href="#" class="notification">
		<i class='bx bxs-bell' ></i>
		<span class="num">8</span>
	</a>
	<div style="" class="profil-container d-flex align-items-center   mx-2    " >
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
		<form action="{{ route('auth.logout')}}" method="POST"id="disconnect" style="display: none">
			@method('delete')
			@csrf
		</form>
		<a onclick="event.preventDefault; document.getElementById('disconnect').submit();" class="logout mx-3 " style="cursor: pointer; ">
			<i class='bx bx-log-in ' style="font-size: 20px" ></i>
		</a>
	</div>
	
</nav>