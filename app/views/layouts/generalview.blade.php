@layout('frame')

@section('addcss')
<link rel="stylesheet" href="../app/views/css/generalview.css">
@endsection 

@section('navli')
<li class="active"><a href="#">总览</a></li>
<li><a href="#">查询</a></li>
<li><a href="#">初审</a></li>
<li><a href="#">审核</a></li>
<li><a href="#">赋予学号</a></li>
@endsection 

@section('maincontent')
<div class="row separateline"></div>
<div class="row separateline"></div>

<div class="row item-font">
	<div class="col-md-4">
		<p>本年度收到新申请{{ Form::text('newapply','203',array('class' =>'input-generalview'))}}份</p>
		<p>本年度收到再奖申请{{ Form::text('applyagain','150',array('class' =>'input-generalview'))}}份</p>
	</div>
	<div class="col-md-2">
		<button class="btn btn-lg btn-primary" onclick="#">查询</button>
	</div>
	<div class="col-md-2">
		<button class="btn btn-lg btn-primary" onclick="#">批量赋予学号</button>
	</div>
</div>
<div class="row separateline"></div>
<div class="row separateline"></div>

@endsection 