<!DOCTYPE html>
<html>

<head>
	@include('user.partial.css')
</head>

<body class="newbg">

	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
	</div>

	<div class="theme-layout" id="scrollup">

		@include('user.partial.aside')


		@yield('content')

		@include('user.pesan.alert')

		@include('user.partial.footer')

	</div>

	<div class="account-popup-area signin-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>Masuk</h3>
			<form>
				<div class="cfield">
					<input type="text" placeholder="Username" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<p class="remember-label">
					<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
				</p>
				<a href="#" title="">Forgot Password?</a>
				<button type="submit">Login</button>
			</form>
		</div>
	</div><!-- LOGIN POPUP -->

	<div class="account-popup-area signup-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>Daftar</h3>
			<form action="{{ url('/register') }}" method="post">
				@csrf
				<div class="cfield">
					<input type="text" id="name" placeholder="Username" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" id="password" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<div class="cfield">
					<input type="text" id="email" placeholder="Email" />
					<i class="la la-envelope-o"></i>
				</div>
				<div class="cfield">
					<input type="text" id="phone" placeholder="Nomor Telepon" />
					<i class="la la-phone"></i>
				</div>
				<button type="submit">Daftar</button>
			</form>
		</div>
	</div><!-- SIGNUP POPUP -->

	@include('user.partial.js')

</body>

</html>