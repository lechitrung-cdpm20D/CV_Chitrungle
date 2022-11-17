<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="teamplateAdmin/style.css">

	<title>AdminVTV</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			
			<span class="text">AdminVTV</span>
		</a>
		<ul class="side-menu top">
		<li class="">
				<a href="#">
					<i class='bx bxs' ></i>
					<span class="text" style="color:red;font-weight: bold">Xin chào:  <h2>{{Auth::user()->Username}}</h2></span>
				</a>
			</li>
            <li class="">
			<a href="">
					<i class='' ></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li class="active">
			<a href="{{route('menu')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li>
				<a href="{{route('ListUser')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý tài khoản</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Cài đặt</span>
				</a>
			</li>
			<li>
				<a href="{{route('.Admin_Login')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->

	<!-- CONTENT -->
	

	<script src="teamplateAdmin/script.js"></script>
</body>
</html>