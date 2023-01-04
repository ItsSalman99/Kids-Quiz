<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand">
			<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
			</div>
			<div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
					<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
				</div>
			</div>

			<div class="user-box dropdown">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					@if(Auth::user()->user_img)
					<img src="{{asset('storage/profile/'.Auth::user()->user_img)}}" class="user-img" alt="user avatar">
					@endif
					
					<div class="user-info ps-3">
						@if(Auth::user()->name)
						<p class="user-name mb-0">{{ucwords(Auth::user()->name)}}</p>	
						@endif
						<!-- <p class="designattion mb-0"></p> -->
					</div>
					
				</a>
				<a class="dropdown-item" href="{{route('admin.user.logout')}}"><i class='bx bx-log-out-circle'></i></a>
				
				<!-- <ul class="dropdown-menu dropdown-menu-end">
					<li>
						
					</li>
				</ul> -->
			</div>
		</nav>
	</div>
</header>