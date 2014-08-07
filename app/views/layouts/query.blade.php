@layout('frame')

@section('addcss')
<link rel="stylesheet" href="../app/views/css/query.css">
@endsection 

@section('navli')
<li><a href="#">总览</a></li>
<li class="active"><a href="#">查询</a></li>
<li><a href="#">初审</a></li>
<li><a href="#">审核</a></li>
<li><a href="#">赋予学号</a></li>
@endsection 

@section('maincontent')
<div class="row separateline"></div>

{{ Form::open(array('url' => 'our/target/route')) }}
<div class="row item-style">
	<div class="col-md-1">筛选</div>
	<div class="col-md-1">
		{{ Form::label('year','年份:')}}
	</div>
	<div class="col-md-3">
		{{ Form::selectRange('year', 2014, 2016, 2014,array('class'=>'form-control'))}}
	</div>
	<div class="col-md-1">
		{{ Form::label('year','范围：')}}
	</div>
	<div class="col-md-3">
		{{Form::select('size', array('senior' => '高中', 'university' => '大学', 'other' => '其他'), 'university',array('class'=>'form-control'))}}
	</div>
</div>
<div class="row separateline"></div>
<div class="row item-style">
	<div class="col-md-offset-1 col-md-1">
		{{ Form::label('serialid','流水号')}}
	</div>
	<div class="col-md-3">
		{{ Form::text('serialid','',array('class' =>'form-control','placeholder'=>'输入流水号...'))}}
	</div>
	<div class="col-md-1">
		{{ Form::label('studentid','学号:')}}
	</div>
	<div class="col-md-3">
		{{ Form::text('studentid','',array('class' =>'form-control','placeholder'=>'输入学号...'))}}
	</div>
	<div class="col-md-3">
		{{ Form::submit('查询',array('class'=>'btn btn-success'))}}

	</div>
</div>
{{ Form::close() }}

<div class="row separateline"></div>
<div class="row item-style">
	<table class="table table-striped table-bordered">
		<tr>
			<th>流水号</th>
			<th>姓名</th>
			<th>学号</th>
			<th>所在学校</th>
			<th>初审状态</th>
			<th>复审状态</th>
			<th>发放奖金</th>
		</tr>
		<tr>
			<td>1</td>
			<td>宋磊</td>
			<td>1</td>
			<td>交通大学</td>
			<td>通过</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>宋磊</td>
			<td>1</td>
			<td>交通大学</td>
			<td>通过</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>宋磊</td>
			<td>1</td>
			<td>交通大学</td>
			<td>通过</td>
			<td></td>
			<td></td>
		</tr>
	</table>

@endsection 