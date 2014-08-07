@extends('frame')

@section('navli')
<li><a href="generalview">总览</a></li>
<li><a href="query">查询</a></li>
<li><a href="firsttrial">初审</a></li>
<li class="active"><a href="trial">审核</a></li>
<li><a href="giveid">赋予学号</a></li>
@endsection 

@section('maincontent')
<div class="row item-font">
	<div class="row separateline"></div>
{{ Form::open(array('url' => 'trial')) }}
	<div class="row">
		<div class="col-md-2">叔蘋学号</div>
		<div class="col-md-2">{{ Form::text('studentid',$applications[0]->studentid,array('class' =>'form-control','placeholder'=>'输入学号'))}}</div>
		<div class="col-md-2">初审结果</div>
		<div class="col-md-2 ">
			{{Form::select('firsttrialresult', array('not' => '待审核', 'pass' => '通过', 'fail' => '不通过'), $ftr,array('class'=>'form-control'))}}
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row separateline"></div>
	<div class="row">
		<div class="col-md-2">审核结果</div>
		<div class="col-md-2">
			{{Form::select('trialresult', array('not' => '待审核', 'pass' => '通过', 'fail' => '不通过'), $tresult,array('class'=>'form-control'))}}
		</div>
		<div class="col-md-2">奖金金额</div>
		<div class="col-md-2">
			{{ Form::text('money',$applyrecord->money,array('class' =>'form-control','placeholder'=>'输入金额...'))}}
		</div>
		<div class="col-md-2">
		@if($applyrecord->isextraawarded=='是') 
			{{Form::checkbox('specialaward', '是', true )}}
		@else
			{{Form::checkbox('specialaward', '是')}}
		@endif
			是否嘉奖
		</div>
		<div class="col-md-2">
			{{ Form::submit('保存',array('class'=>'btn btn-warning'))}}
		</div>
	</div>
{{ Form::close() }}

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
	<div class="col-md-9">
		个人小结
		<textarea name="summary" placeholder="输入文本" rows="10" cols="100">{{$applications[0]->summary}}</textarea>
	</div>
</div>
@endsection 