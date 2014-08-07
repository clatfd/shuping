@extends('frame') 

@section('navli')
<li><a href="basicinfo">基本信息</a></li>
<li class="active"><a href="applyrecord">申请记录</a></li>
<li><a href="addresslist">通讯录</a></li>
<li><a href="fillapplication">填写申请</a></li>
@endsection 

@section('maincontent')
<table class="table table-striped">
	<tr>
		<th>名称</th>
		<th>申请年份</th>
		<th>是否得奖</th>
		<th>奖金数额</th>
		<th>是否加奖</th>
		<th></th>
	</tr>
@foreach($applyrecords as $applyrecord)
	<tr>
		<td>{{$applyrecord->type}}</td>
		<td>{{$applyrecord->year}}</td>
		<td>{{$applyrecord->isawared}}</td>
		<td>{{$applyrecord->money}}</td>
		<td>{{$applyrecord->isextraawarded}}</td>
		<td><button class="btn btn-primary" onclick="#" disabled="true">详细</button></td>
	</tr>
@endforeach

</table>
@endsection 
