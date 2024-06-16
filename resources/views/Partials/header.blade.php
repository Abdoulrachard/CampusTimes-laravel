<nav>
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
	<div style="" class="profil-container d-flex align-items-center mx-1   " >
		<a href="#" class="profile" style="margin-right:15px;">
			<img src="{{ Auth::user()->profil() }}" alt="">
		</a>
		<div class="profil-info d-flex " style="flex-direction:column">
			<form action="{{ route('auth.logout')}}" method="POST"id="disconnect" style="display: none">
				@method('delete')
				@csrf
			</form>
			<a onclick="event.preventDefault; document.getElementById('disconnect').submit();" class="logout" style="cursor: pointer">
				<i class='bx bx-log-out' ></i>
			</a>
		</div>
	</div>
	
</nav>