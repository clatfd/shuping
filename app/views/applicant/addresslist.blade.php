@extends('frame')
 
@section('addcss')
 {{ HTML::style('assets/css/addresslist.css') }}
@endsection 

@section('navli')
<li><a href="basicinfo">基本信息</a></li>
<li><a href="applyrecord">申请记录</a></li>
<li class="active"><a href="addresslist">通讯录</a></li>
<li><a href="fillapplication">填写申请</a></li>
@endsection 

@section('maincontent')
{{ Form::open(array('url' => 'our/target/route')) }}
<div class="row item-font">
	<div class="col-md-8" id="searchitem">
		<div class="row">
			<div class="col-md-2">
				{{Form::label('name','姓名')}}
			</div>
			<div class="col-md-4">
				{{Form::text('name','',array('class' =>'form-control input-search','placeholder'=>'输入姓名...'))}}
			</div>
			<div class="col-md-2">
				{{Form::label('studentid','叔蘋学号')}}
			</div>
			<div class="col-md-4">
				{{Form::text('studentid','',array('class' =>'form-control input-search','placeholder'=>'输入学号...'))}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				{{Form::label('school','学校')}}
			</div>
			<div class="col-md-4">
				{{Form::text('school','',array('class' =>'form-control input-search','placeholder'=>'输入学校...'))}}
			</div>
			<div class="col-md-2">
				{{Form::label('job','行业')}}
			</div>
			<div class="col-md-4">
				{{Form::text('job','',array('class' =>'form-control input-search','placeholder'=>'输入行业...'))}}
			</div>
		</div>
	</div>
	<div class="col-md-4" id="searchbtn-div">
		{{ Form::submit('查找',array('class'=>'btn btn-success btn-lg'))}}
	</div>
</div>
{{ Form::close() }}
<div class="row item-font">
	<table class="table table-striped table-bordered">
		<tr>
			<th>姓名</th>
			<th>学号</th>
			<th>性别</th>
			<th>行业</th>
			<th>学校</th>
			<th>e-mail</th>
			<th>手机</th>
			<th>备注</th>
		</tr>
		<tr>
			<td>陈力</td>
			<td>7444</td>
			<td>男</td>
			<td>教育</td>
			<td>复旦大学</td>
			<td>c.1994@163.com</td>
			<td>15000744460</td>
			<td>？</td>
		</tr>
	</table>

</div>
@endsection 
