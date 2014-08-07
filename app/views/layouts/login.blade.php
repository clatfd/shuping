<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>奖学金申请管理系统</title>
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	 {{ HTML::style('assets/css/bootstrap-theme.min.css') }}
	 {{ HTML::style('assets/css/login.css') }}
	@yield('addcss') 

</head>
<body>
	<div class="container">
		<div class="row" style="text-align: center;margin-top: 20px;">
			<img src="assets/img/logo.png">
		</div>
		<div class="row">
			<p id="loginheader">奖学金申请管理系统</p>
		</div>
		<div class="row">
			<div class="col-md-6 login-part-left">
				<p class="loginsubheader">初次申请</p>
				{{ Form::open(array('url' => 'our/target/route')) }}
					{{ Form::text('serialnumber','',array('class' =>'form-control input-login','placeholder'=>'输入流水号...'))}}
					{{ Form::submit('登录',array('class'=>'btn btn-primary login-btn'))}}
				{{ Form::close() }}
			</div>
			<div class="col-md-6 login-part-right">
				<p class="loginsubheader">得奖同学</p>
				{{ Form::open(array('url' => 'our/target/route')) }}
					{{ Form::text('serialnumber','',array('class' =>'form-control input-login','placeholder'=>'输入流水号...'))}}
					{{ Form::password('passwd',array('class' =>'form-control input-login','placeholder'=>'输入密码...'))}}
					{{ Form::submit('登录',array('class'=>'btn btn-success login-btn'))}}
				{{ Form::close() }}
				<input class="btn btn-danger login-btn" type="submit" value="管理员登陆">
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	{{ HTML::script('./assets/js/jquery.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	{{ HTML::script('./assets/js/bootstrap.min.js') }}
</body>

