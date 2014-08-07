@layout('frame')

@section('navli')
<li><a href="#">基本信息</a></li>
<li><a href="#">申请记录</a></li>
<li><a href="#">通讯录</a></li>
<li class="active"><a href="#">填写申请</a></li>
@endsection 

@section('maincontent')
{{ Form::open(array('url' => 'our/target/route', 'files' => true)) }}
<div class="row item-font">
	<div class="col-md-2">
		{{Form::label('transcript','成绩单')}}
	</div>
	<div class="col-md-10">
		{{Form::file('transcript')}}
	</div>
</div>
<div class="row separateline"></div>
<div class="row item-font">
	<div class="col-md-2">
		{{Form::label('certificate1','证书1')}}
	</div>
	<div class="col-md-10">
		{{Form::file('transcript')}}
	</div>
</div>
<div class="row separateline"></div>
<div class="row item-font">
	<div class="col-md-2">
		{{Form::label('certificate2','证书2')}}
	</div>
	<div class="col-md-10">
		{{Form::file('transcript')}}
	</div>
</div>
<div class="row separateline"></div>
<div class="row item-font">
	<div class="col-md-2">
		{{Form::label('certificate3','证书3')}}
	</div>
	<div class="col-md-10">
		{{Form::file('transcript')}}
	</div>
</div>
<div class="row separateline"></div>
<div class="row separateline"></div>

<div class="row item-font" style="text-align: center;">
	<div class="col-md-6">
		{{ Form::submit('保存',array('class'=>'btn btn-success btn-lg'))}}
	</div>
	<div class="col-md-6">
		<button class="btn btn-warning btn-lg" onclick="#">返回</button>
	</div>
</div>
{{ Form::close() }}
@endsection 