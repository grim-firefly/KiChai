<div class="col-md-1 " id="sidebar-left-section">

	<div class="sidebar">
		<a href="#" id="sidebar-toggler-btn"><i class="fa-solid fa-circle-chevron-right"></i></a>
		<div class="sidebar-main" id="sidebar">
			<!-- single sidebar button  -->
			<div class="sidebar-only-button">
				<a href="{{url('/')}}" class="sidebar-button {{Request::path()=='/' ? 'active':''}}"><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
					DashBoard</a>
			</div>

			<div class="sidebar-only-button">
				<a href="{{route('Category.Index')}}" class="sidebar-button {{Request::path()=='category' ? 'active':''}}"><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
					Category</a>
			</div>
			<!-- sidebar button containing list  -->
			<div class="sidebar-list-container">
				<button class=" sidebar-button collapsed {{ (Request::path()=='user' or  Request::path()=='user-banned')  ? 'active':''}} " data-bs-target="#usersection" data-bs-toggle="collapse" aria-controls="usersection" aria-expanded="true">
					<i class="fa-solid fa-user sidebar-button-left-icon"></i> Users<i class="fa-solid fa-circle-chevron-down sidebar-button-icon "></i>
				</button>
				<ul class="sidebar-list collapse  " id="usersection">


					<li class="sidebar-list-item">
						<a href="{{route('User.Index')}}" class="{{Request::path()=='user' ? 'active':''}}">
							<i class="list-item-icon fa-solid fa-user-edit"></i>
							<span> User</span>
						</a>
					</li>
					<li class="sidebar-list-item">
						<a href="{{route('User.Banned')}}" class="">
							<i class=" list-item-icon fa-solid fa-user-times"></i>
							<span>Banned User</span>
						</a>
					</li>
			</div>
			<div class="sidebar-only-button">
				<a href="{{route('Product.Index')}}" class="sidebar-button {{Request::path()=='product' ? 'active':''}} "><i class="fa-solid fa-cart-flatbed-suitcase sidebar-button-left-icon"></i>
					Products</a>
			</div>
			<div class="sidebar-only-button">
				<a href="{{route('Lab.Index')}}" class="sidebar-button {{Request::path()=='product' ? 'active':''}} "><i class="fa-solid fa-cart-flatbed-suitcase sidebar-button-left-icon"></i>
					Labs</a>
			</div>
			<!-- sidebar button containing list  -->

		</div>

	</div>
</div>