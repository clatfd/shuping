@layout('frame') 

@section('navli')
<li><a href="#">基本信息</a></li>
<li class="active"><a href="#">申请记录</a></li>
<li><a href="#">通讯录</a></li>
<li><a href="#">填写申请</a></li>
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
	<tr>
		<td>叔蘋奖学金</td>
		<td>2011</td>
		<td>是</td>
		<td>1500</td>
		<td>否</td>
		<td><button class="btn btn-primary" onclick="#">详细</button></td>
	</tr>
	<tr>
		<td>叔蘋奖学金</td>
		<td>2012</td>
		<td>否</td>
		<td>1500</td>
		<td>否</td>
		<td><button class="btn btn-primary" onclick="#">详细</button></td>
	</tr>
	<tr>
		<td>叔蘋奖学金</td>
		<td>2013</td>
		<td>申请中</td>
		<td></td>
		<td></td>
		<td><button class="btn btn-primary" onclick="#">详细</button></td>
	</tr>
</table>
@endsection 
