@extends('layouts.admin')
@section('title','瓜子后台管理')
@section('script')
	<script type="text/javascript" src="/admin/style/js/jquery.js"></script>
    <script type="text/javascript" src="/admin/style/js/ch-ui.admin.js"></script>
@endsection
@section('content')
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：{{ session('user')->ad_name }}</li>
				<li><a href="{{ url('admin/pass') }}" target="main">修改密码</a></li>
				<li><a href="{{ url('admin/quit') }}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>用户管理</h3>
				<ul class="sub_menu" id="sub_menu">
					<li><a href="{{ url('admin/user/create') }}" target="main"><i class="fa fa-fw fa-plus-square"></i>用户添加</a></li>
					<li><a href="{{ url('admin/user') }}" target="main"><i class="fa fa-fw fa-list-ul"></i>用户列表</a></li>
					<li><a href="tab.html" target="main"><i class="fa fa-fw fa-list-alt"></i>用户权限</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-x fa-automobile"></i>商品管理</h3>
				<ul class="sub_menu">
					<li><a href="{{ url('admin/cars/create') }}" target="main"><i class="fa fa-fw fa-plus-square"></i>二手添加</a></li>
					<li><a href="{{ url('admin/cars') }}" target="main"><i class="fa fa-fw fa-chain"></i>商品列表</a></li>
					<li><a href="{{ url('admin/cars/new') }}" target="main"><i class="fa fa-fw fa-tachometer"></i>最新浏览</a></li>
					<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
				</ul>
			</li>
			<li>
<<<<<<< HEAD
				<h3><i class="fa fa-fw fa-x fa-image"></i>轮播图</h3>
				<ul class="sub_menu">
					<li><a href="" target="main"><i class="fa fa-fw fa-plus-square"></i>轮播图添加</a></li>
					<li><a href="" target="main"><i class="fa fa-fw fa-chain"></i>轮播列表</a></li>
					<li><a href="" target="main"><i class="fa fa-fw fa-tachometer"></i>最新浏览</a></li>
					<li><a href="" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
=======
				<h3><i class="fa fa-fw fa-x fa-image"></i>前台用户管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('/admin/homeuser')}}" target="main"><i class="fa fa-fw fa-tachometer"></i>用户列表</a></li>
					<li><a href="{{url('/admin/homesell')}}" target="main"><i class="fa fa-fw fa-tags"></i>前台用户车辆</a></li>
>>>>>>> origin/sunyusheng
				</ul>
			</li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{ url('admin/info') }}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2017. Powered By <a href="http://47.94.196.107">http://www.dasheng.com</a>.
	</div>
	<!--底部 结束-->
</body>
@endsection