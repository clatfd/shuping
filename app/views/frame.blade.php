<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>奖学金申请管理系统</title>
	 {{ HTML::style('assets/css/bootstrap.min.css') }}
	 {{ HTML::style('assets/css/bootstrap-theme.min.css') }}
	 {{ HTML::style('assets/css/toastr.min.css') }}
	 {{ HTML::style('assets/css/frame.css') }}
	@yield('addcss') 
</head>
<body>
	<div class="container">
		<div class="row" style="text-align: center;margin-top: 20px;">
			<img src="assets/img/logo.png">
		</div>
		<div class="row">
			<div class="col-md-11" id="header">奖学金申请管理系统</div>
			<div class="col-md-1" id="div-logout"><a href="/"><button class="btn btn-danger">登出</button></a></div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<ul class="nav nav-tabs nav-style" role="tablist">
				@yield('navli') 
			</ul>
		</div>
		<div class="wraper">
		 @yield('maincontent') 
		<!--  @section('maincontent')
			
		 @show -->
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	{{ HTML::script('./assets/js/jquery.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	{{ HTML::script('./assets/js/bootstrap.min.js') }}
	<!-- alert info -->
	{{ HTML::script('./assets/js/toastr.min.js') }}
	<script type="text/javascript">
	@yield('script') 

	</script>
</body>

