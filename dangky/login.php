<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<form action='login.php' class="dangnhap" method='POST'>

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Đăng_nhập!</h1>
      <p class="py-6">Đăng nhập ngay và luôn!</p>
    </div>
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <div class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Username</span>
          </label>
          <input type="text" class="input input-bordered" name="username" value="" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" class="input input-bordered" name="password" value="" required />
        </div>
        <div class="form-control mt-6">
          <input type="submit" class="button btn btn-primary" name="dangnhap" value="Đăng nhập" />
          <label class="label">
            <a href="register.php" class="label-text-alt link link-hover" title="Đăng ký">Đăng ký</a>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require "login_pros.php";?>
<form>

</body>
</html>
