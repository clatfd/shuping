@extends('frame')

@section('addcss')
<link rel="stylesheet" href="assets/css/generalview.css">
@endsection 

@section('navli')
<li class="active"><a href="generalview">总览</a></li>
<li><a href="query">查询</a></li>
<li><a href="firsttrial">初审</a></li>
<li><a href="trial">审核</a></li>
<li><a href="giveid">赋予学号</a></li>
@endsection 

@section('maincontent')
<div class="row separateline"></div>
<div class="row separateline"></div>

<div class="row item-font">
	<div class="col-md-4">
		<p>本年度收到新申请{{ Form::text('newapply',$applicationnum,array('class' =>'input-generalview'))}}份</p>
		<p>本年度收到再奖申请{{ Form::text('applyagain',$applicationnum,array('class' =>'input-generalview'))}}份</p>
	</div>
	<div class="col-md-2">
		<a href="query"><button class="btn btn-lg btn-primary" onclick="#">查询</button></a>
	</div>
	<div class="col-md-2">
		<a href="giveid"><button class="btn btn-lg btn-primary" onclick="#">批量赋予学号</button></a>
	</div>
</div>
<div class="row separateline"></div>
<div class="row separateline"></div>

@endsection 