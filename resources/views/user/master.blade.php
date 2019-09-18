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

		@include('user.partial.footer')

	</div>

	<div class="account-popup-area signin-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>Masuk</h3>
			<form>
				<div class="cfield">
					<input type="text" id="email" placeholder="Email" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" id="password" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<p class="remember-label">
					<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
				</p>
				<a href="#" title="">Forgot Password?</a>
				<button type="submit" id="loginsubmit">Login</button>
			</form>
		</div>
	</div><!-- LOGIN POPUP -->

	<div class="account-popup-area signup-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
			<h3>Daftar</h3>
			<form>
				@csrf
				<div class="cfield">
					<input type="text" id="name" placeholder="Username" />
					<i class="la la-user"></i>
				</div>
				<div class="cfield">
					<input type="password" id="password_regis" placeholder="********" />
					<i class="la la-key"></i>
				</div>
				<div class="cfield">
					<input type="text" id="email_regis" placeholder="Email" />
					<i class="la la-envelope-o"></i>
				</div>
				<div class="cfield">
					<input type="text" id="phone" placeholder="Nomor Telepon" />
					<i class="la la-phone"></i>
				</div>
				<button type="submit" id="signup_submit">Daftar</button>
			</form>
		</div>
	</div><!-- SIGNUP POPUP -->
	@include('user.partial.js')

	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		/*
		<button class="viewloker" id="1"></button>
		<button class="viewloker" id="2"></button>

		$(".viewloker").click(function(){
			var loker_id = $(this).attr('id');

			$.ajax({
				type: 'GET',
				url: 'projek/jobhun/public/ambilloker/' + loker_id
				success: function(data){
					$('.signin-popup-box').fadeOut('fast');
					$('html').removeClass('no-scroll');
					$('namaperusahaan').val('data.company_name');

				}
			});
		});*/

		$("#loginsubmit").click(function(e){
			//mencegah refresh halaman
			e.preventDefault();
			
			//ambil data dari id
			var emailnya = $("#email").val();
			var passwordnya = $("#password").val();

			$.ajax({
				type: 'POST',
				url: '/projek/jobhun/public/userlogin',
				data: {
					email: emailnya,
					password: passwordnya
				},
				success: function(data){
					alert(data.pesan);
					$('.signin-popup-box').fadeOut('fast');
					$('html').removeClass('no-scroll');
				},
				error: function(error){
					alert(error.responseJSON.pesan);
				}
			})
		});

				
	</script>

	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

			$("#signup_submit").click(function(e){
			//mencegah refresh halaman
			e.preventDefault();

			// ambil data dari id
			var usernamenya = $("#name").val();
			var passwordnya = $("#password_regis").val();
			var emailnya = $("#email_regis").val();
			var phonenya = $("#phone").val();

			// console.log(usernamenya+', '+passwordnya+', '+emailnya+', '+phonenya);


			$.ajax({
				type: 'POST',
				url: '/projek/jobhun/public/usersign-up',
				data: {
					name:usernamenya,
					email: emailnya,
					password: passwordnya,
					phone:phonenya
				},
				success: function(data){
					alert(data.pesan);
					$('.signin-popup-box').fadeOut('fast');
					$('html').removeClass('no-scroll');
				},
				error: function(error){
					alert(error.responseJSON.pesan);
				}
			})
		});

</script>


	@yield('customjs')

</body>

</html>