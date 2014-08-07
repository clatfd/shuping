@layout('frame')

@section('navli')
<li><a href="#">总览</a></li>
<li><a href="#">查询</a></li>
<li><a href="#">初审</a></li>
<li class="active"><a href="#">审核</a></li>
<li><a href="#">赋予学号</a></li>
@endsection 

@section('maincontent')
<div class="row item-font">
	<div class="row separateline"></div>
{{ Form::open(array('url' => 'our/target/route')) }}
	<div class="row">
		<div class="col-md-2">叔蘋学号</div>
		<div class="col-md-2">{{ Form::text('studentid','',array('class' =>'form-control','placeholder'=>'输入学号'))}}</div>
		<div class="col-md-2">初审结果</div>
		<div class="col-md-2 ">
			{{Form::select('trialresult', array('not' => '待审核', 'pass' => '通过', 'fail' => '不通过'), 'pass',array('class'=>'form-control'))}}
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row separateline"></div>
	<div class="row">
		<div class="col-md-2">审核结果</div>
		<div class="col-md-2">
			{{Form::select('trialresult', array('not' => '待审核', 'pass' => '通过', 'fail' => '不通过'), 'not',array('class'=>'form-control'))}}
		</div>
		<div class="col-md-2">奖金金额</div>
		<div class="col-md-2">
			{{ Form::text('money','',array('class' =>'form-control','placeholder'=>'输入金额...'))}}
		</div>
		<div class="col-md-2">
			{{Form::checkbox('specialaward', 'value')}}是否嘉奖
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
		<div class="col-md-3">{{ Form::text('name','',array('class' =>'form-control','placeholder'=>'宋磊'))}}</div>
		<div class="col-md-3">{{ Form::text('gender','',array('class' =>'form-control','placeholder'=>'男'))}}</div>
		<div class="col-md-3">{{ Form::text('birthday','',array('class' =>'form-control','placeholder'=>'1980.01.20'))}}</div>
		<div class="col-md-3">{{ Form::text('firstschool','',array('class' =>'form-control','placeholder'=>'上海交大附中'))}}</div>
	</div>
	<div class="row separateline"></div>
	<div class="row">
		<div class="col-md-9">通信地址</div>
		<div class="col-md-3">邮编:</div>
	</div>
	<div class="row">
		<div class="col-md-9">{{ Form::text('address','',array('class' =>'form-control','placeholder'=>'上海市中山西路253号503室'))}}</div>
		<div class="col-md-3">{{ Form::text('zipcode','',array('class' =>'form-control','placeholder'=>'200104'))}}</div>
	</div>
	<div class="row separateline"></div>
	<div class="row">
		<div class="col-md-6">E-mail</div>
		<div class="col-md-6">手机号码</div>
	</div>
	<div class="row">
		<div class="col-md-6">{{ Form::text('email','',array('class' =>'form-control','placeholder'=>'eestone@163.com'))}}</div>
		<div class="col-md-6">{{ Form::text('mobile','',array('class' =>'form-control','placeholder'=>'12345678901'))}}</div>
	</div>
	<div class="row separateline"></div>
	<div class="row">
		<div class="col-md-6">家庭联系人</div>
		<div class="col-md-6">家庭联系电话</div>
	</div>
	<div class="row">
		<div class="col-md-6">{{ Form::text('familycontact','',array('class' =>'form-control','placeholder'=>'宋小磊'))}}</div>
		<div class="col-md-6">{{ Form::text('familyphone','',array('class' =>'form-control','placeholder'=>'021-12345678'))}}</div>
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
	<div class="col-md-3">{{ Form::text('school','',array('class' =>'form-control','placeholder'=>'交通大学'))}}</div>
	<div class="col-md-3">{{ Form::text('grade','',array('class' =>'form-control','placeholder'=>'大三'))}}</div>
	<div class="col-md-3">{{ Form::text('major','',array('class' =>'form-control','placeholder'=>'软件工程'))}}</div>
	<div class="col-md-3">{{ Form::text('postition','',array('class' =>'form-control','placeholder'=>'副班长'))}}</div>
</div>
<div class="row separateline"></div>
<div class="row item-font">
	<div class="col-md-3">
		获得荣誉
		<textarea name="award" placeholder="校三好学生" rows="10" cols="30"></textarea>
	</div>
	<div class="col-md-9">
		个人小结
		<textarea name="summary" placeholder="本人。。。。。。" rows="10" cols="100"></textarea>
	</div>
</div>
@endsection 