@extends('frame')

@section('addcss')
	 {{ HTML::style('assets/css/basicinfo.css') }}
@endsection 

@section('navli')
<li class="active"><a href="#">基本信息</a></li>
<li><a href="#">申请记录</a></li>
<li><a href="#">通讯录</a></li>
<li><a href="#">填写申请</a></li>
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
			<div class="col-md-3">宋磊</div>
			<div class="col-md-3">男</div>
			<div class="col-md-3">1980.01.20</div>
			<div class="col-md-3">上海交大附中</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-9">通信地址：</div>
			<div class="col-md-3">邮编:</div>
		</div>
		<div class="row">
			<div class="col-md-9">上海市中山西路253号503室</div>
			<div class="col-md-3">200104</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">E-mail：</div>
			<div class="col-md-6">手机号码</div>
		</div>
		<div class="row">
			<div class="col-md-6">eestone@163.com</div>
			<div class="col-md-6">12345678901</div>
		</div>
		<div class="row separateline"></div>
		<div class="row">
			<div class="col-md-6">家庭联系人：</div>
			<div class="col-md-6">家庭联系电话：</div>
		</div>
		<div class="row">
			<div class="col-md-6">宋小磊</div>
			<div class="col-md-6">021-12345678</div>
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
			<td>上海市交大附中</td>
			<td>90级</td>
			<td>高一（5）班</td>
			<td> </td>
		</tr>
		<tr>
			<td>交通大学</td>
			<td>93级</td>
			<td>高一（5）班</td>
			<td>班长</td>
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
				<button class="btn btn-warning">修改基本信息</button>
			</div>
			<div class="col-md-4">
				<select>
					<option selected="" value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
				</select>
			</div>
			<div class="col-md-4">
				<input type="checkbox" id="spjxj">叔蘋奖学金<br/>
				<input type="checkbox" id="spzxj">叔蘋助学金<br/>
				<input type="checkbox" id="chjxj">彩虹奖学金
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<button class="btn btn-lg btn-success" id="btn-submit">申请</button>
	</div>
	
</div>
@endsection 