@extends('frame')

@section('addcss')
	 {{ HTML::style('assets/css/fillapplication.css') }}
@endsection 

@section('navli')
<li><a href="basicinfo">基本信息</a></li>
<li><a href="applyrecord">申请记录</a></li>
<li><a href="addresslist">通讯录</a></li>
<li class="active"><a href="fillapplication">填写申请</a></li>
@endsection 

@section('maincontent')  
{{ Form::open(['url' => 'fillapplication', 'files' => true]) }}
<div class="row item-font">
	<div class="col-md-8">
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-3">姓名</div>
			<div class="col-md-3">性别</div>
			<div class="col-md-3">出生年月</div>
			<div class="col-md-3">初次获奖学校</div>
		</div>
		<div class="row">
			<div class="col-md-3">{{ Form::text('name',$applications[0]->name,array('class' =>'form-control'))}}</div>
			<div class="col-md-3">{{ Form::text('gender',$applications[0]->gender,array('class' =>'form-control'))}}</div>
			<div class="col-md-3">{{ Form::text('birthday',$applications[0]->birthday,array('class' =>'form-control'))}}</div>
			<div class="col-md-3">{{ Form::text('firstschool',$applications[0]->firstschool,array('class' =>'form-control'))}}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-9">通信地址</div>
			<div class="col-md-3">邮编:</div>
		</div>
		<div class="row">
			<div class="col-md-9">{{ Form::text('address',$applications[0]->address,array('class' =>'form-control'))}}</div>
			<div class="col-md-3">{{ Form::text('zipcode',$applications[0]->zipcode,array('class' =>'form-control'))}}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">E-mail</div>
			<div class="col-md-6">手机号码</div>
		</div>
		<div class="row">
			<div class="col-md-6">{{ Form::text('email',$applications[0]->email,array('class' =>'form-control'))}}</div>
			<div class="col-md-6">{{ Form::text('mobile',$applications[0]->mobile,array('class' =>'form-control'))}}</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">家庭联系人</div>
			<div class="col-md-6">家庭联系电话</div>
		</div>
		<div class="row">
			<div class="col-md-6">{{ Form::text('familycontact',$applications[0]->familycontact,array('class' =>'form-control'))}}</div>
			<div class="col-md-6">{{ Form::text('familyphone',$applications[0]->familyphone,array('class' =>'form-control'))}}</div>
		</div>
		<div class="row separateline"></div>
	</div>
	<div class="col-md-4" id="profile-pic">
		<img src="assets/img/profile.png">
	</div>
	<div class="row separateline"></div>
</div>
<div class="row item-font">
	<div class="col-md-3">所在学校</div>
	<div class="col-md-3">年级</div>
	<div class="col-md-3">专业</div>
	<div class="col-md-3">职务</div>
</div>
<div class="row item-font">
	<div class="col-md-3">{{ Form::text('school',$applications[0]->school,array('class' =>'form-control'))}}</div>
	<div class="col-md-3">{{ Form::text('grade',$applications[0]->grade,array('class' =>'form-control'))}}</div>
	<div class="col-md-3">{{ Form::text('major',$applications[0]->major,array('class' =>'form-control'))}}</div>
	<div class="col-md-3">{{ Form::text('position',$applications[0]->position,array('class' =>'form-control'))}}</div>
</div>
<div class="row separateline"></div>
<div class="row item-font">
	<div class="col-md-3">
		获得荣誉
		<textarea name="award" placeholder="输入文本" rows="10" cols="30">{{$applications[0]->award}}</textarea>
	</div>
	<div class="col-md-7">
		个人小结
		<textarea name="summary" placeholder="输入文本" rows="10" cols="70">{{$applications[0]->summary}}</textarea>
	</div>
	<div class="col-md-2" id="btnapply-div">
		<button class="btn btn-primary btn-apply" onclick="#">上传附件</button><br/>
		<button class="btn btn-danger btn-apply" onclick="#">舍弃</button><br/>
		<button class="btn btn-success btn-apply" onclick="#">暂存</button><br/>
		{{ Form::submit('申请并导出为pdf',array('class'=>'btn btn-warning btn-apply'))}}
	</div>
</div>
{{ Form::close() }}
@endsection 

