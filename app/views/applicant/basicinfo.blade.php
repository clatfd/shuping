@extends('frame')

@section('addcss')
	 {{ HTML::style('assets/css/basicinfo.css') }}
@endsection 

@section('navli')
<li class="active"><a href="basicinfo">基本信息</a></li>
<li><a href="applyrecord">申请记录</a></li>
<li><a href="addresslist">通讯录</a></li>
<li><a href="fillapplication">填写申请</a></li>
@endsection 

@section('maincontent')
<div class="row item-font">
	<div class="col-md-8">
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-3">姓名：</div>
			<div class="col-md-3">性别：</div>
			<div class="col-md-3">出生年月：</div>
			<div class="col-md-3">初次获奖学校：</div>
		</div>
		<div class="row">
			<div class="col-md-3">{{ $applications->name }}</div>
			<div class="col-md-3">{{ $applications->gender }}</div>
			<div class="col-md-3">{{ $applications->birthday }}</div>
			<div class="col-md-3">{{ $applications->firstschool }}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-9">通信地址：</div>
			<div class="col-md-3">邮编:</div>
		</div>
		<div class="row">
			<div class="col-md-9">{{ $applications->address }}</div>
			<div class="col-md-3">{{ $applications->zipcode }}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">E-mail：</div>
			<div class="col-md-6">手机号码</div>
		</div>
		<div class="row">
			<div class="col-md-6">{{ $applications->email }}</div>
			<div class="col-md-6">{{ $applications->mobile }}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">家庭联系人：</div>
			<div class="col-md-6">家庭联系电话：</div>
		</div>
		<div class="row">
			<div class="col-md-6">{{ $applications->familycontact }}</div>
			<div class="col-md-6">{{ $applications->familyphone }}</div>
		</div>
		<div class="row separateline"></div>
	</div>
	<div class="col-md-4" id="profile-pic">
		<img src="assets/img/profile.png">
	</div>
</div>
<div class="row item-font">
	<table class="table table-bordered" id="schooltable">
		<tr>
			<th>所在学校</th>
			<th>年级</th>
			<th>专业/班级</th>
			<th>职务</th>
		</tr>
		<tr>
			<td>{{ $applications->school }}</td>
			<td>{{ $applications->grade }}</td>
			<td>{{ $applications->major }}</td>
			<td>{{ $applications->position }}</td>
		</tr>
		
	</table>
</div>

<div class="row item-font">
	<div class="row separateline"></div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-4">确认基本信息：</div>
			<div class="col-md-4">确认年份：</div>
			<div class="col-md-4">选择要申请的奖学金：</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-4">
				<a href="fillapplication"><button class="btn btn-warning">修改基本信息</button></a>
			</div>
{{ Form::open(['url' => 'basicinfo']) }}	
			<div class="col-md-4">
				{{ Form::selectRange('year', 2014, 2016, 2014,array('class'=>'form-control'))}}
			</div>
			<div class="col-md-4">
				{{Form::checkbox('spjxj', '1',true)}} 叔蘋奖学金<br>
				{{Form::checkbox('spzxj', '1')}} 叔蘋助学金<br>
				{{Form::checkbox('chjxj', '1')}} 彩虹奖学金<br>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		{{ Form::submit($applystate,array('class'=>'btn btn-lg btn-success', $applybtncontrol))}}

	</div>
{{ Form::close() }}
	
</div>
@endsection 