<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>个人资料</title>

		<link href="../assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="../assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="../css/personal.css" rel="stylesheet" type="text/css">
		<link href="../css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="http://www.5imoban.net/download/jquery/jquery-2.1.4.js" type="text/javascript"></script>
		<script src="../assets/js/amazeui.js"></script>	
		<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>		
	</head>
<?php

		if(!empty($_COOKIE['id'])){


			$dns='mysql:host=localhost;dbname=shop';
			$pdo=new PDO($dns,'root','root');
			$a=$pdo->prepare('select * from member where id="'.$_COOKIE['id'].'"');
			$a->execute();
			$re=$a->fetchAll(PDO::FETCH_ASSOC);

			if($a->rowCount()>0){




	?>
	<body>
		<!--头 -->
		<header>
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd">
									<a href="../login.html" target="_top" class="h">亲，请登录</a>
									<a href="../register.html" target="_top">免费注册</a>
								</div>
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="../index.html" target="_top" class="h">商城首页</a></div>
							</div>
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="index.html" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
							</div>
							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="../shopcart.html" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
							</div>
							<div class="topMessage favorite">
								<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							<div class="logoBig">
								<li><img src="../images/" /></li>
							</div>

							<div class="search-bar pr">
								<a name="index_none_header_sysc" href="#"></a>
								<form>
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
								</form>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</article>
		</header>
            <div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="../index.html">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
			</div>
			<b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr/>

						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								<img class="am-circle am-img-thumbnail" src="../images/<?php echo $re[0]['headpicture']?>" alt="" />
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i><?php echo $re[0]['username']?></i></b></div>
								<div class="vip">
                                      <span></span><a href="#">会员专享</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal" >

								<div class="am-form-group">
									<label for="user-name2" class="am-form-label">昵称</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="nickname" class="nicheng">
                                          <small>昵称长度不能超过40个汉字</small>
									</div>
								</div>

								<div class="am-form-group">
									<label for="user-name" class="am-form-label">姓名</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="name" class="name">
                                         
									</div>
								</div>

								<div class="am-form-group">
									<label class="am-form-label">性别</label>
									<!-- 单选按钮name必须一致，必须设置value 要共同有相同的class或id获取val时用到。 -->
									<div class="am-form-content sex">
										<label class="am-radio-inline">
											<input type="radio" name="radio10" value="male" data-am-ucheck class="radio10"> 男
										</label>
										<label class="am-radio-inline">
											<input type="radio" name="radio10" value="female" data-am-ucheck class="radio10"> 女
										</label>
										<label class="am-radio-inline">
											<input type="radio" name="radio10" value="secret" data-am-ucheck class="radio10"> 保密
										</label>
									</div>
								</div>

								<div class="am-form-group">
									<label for="user-birth" class="am-form-label">生日</label>
									<div class="am-form-content birth">
										<div class="birth-select">
											<select data-am-selected>
												<option value="a">2015</option>
												<option value="b">1987</option>
											</select>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected>
												<option value="a">12</option>
												<option value="b">8</option>
											</select>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected>
												<option value="a">21</option>
												<option value="b">23</option>
											</select>
											<em>日</em></div>
									</div>
							
								</div>
								<div class="am-form-group">
									<label for="user-phone" class="am-form-label" >电话</label>
									<div class="am-form-content">
										<input id="user-phone" placeholder="telephonenumber" type="tel" >

									</div>
								</div>
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">电子邮件</label>
									<div class="am-form-content">
										<input id="user-email" placeholder="Email" type="email">

									</div>
								</div>
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">个性签名</label>
									<div class="am-form-content">
										<input id="introduce" placeholder="introduce" type="text">

									</div>
								</div>
								<div class="am-form-group address">
									<label for="user-address" class="am-form-label">收货地址</label>
									<div class="am-form-content address">
										<a href="address.html">
											<p class="new-mu_l2cw">
												<span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												<span class="am-icon-angle-right"></span>
											</p>
										</a>

									</div>
								</div>
								<div class="am-form-group safety">
									<label for="user-safety" class="am-form-label">账号安全</label>
									<div class="am-form-content safety">
										<a href="safety.html">

											<span class="am-icon-angle-right"></span>

										</a>

									</div>
								</div>
								<div class="info-btn">
									<div class="am-btn am-btn-danger" id="updatexinxi">保存修改</div>
								</div>

							</form>
							<script type="text/javascript" src="../js/updateInformation.js">
							
							</script>
						</div>

					</div>

				</div>
				<!--底部-->
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="http://www.5imoban.net" target="_blank" title="html模板">我爱模板网</a>
							<b>|</b>
							<a href="../index.html">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>更多模板 <a href="http://www.5imoban.net/" target="_blank" title="静态网页模板">我爱模板网</a></em>
						</p>
					</div>
				</div>
			</div>

			<aside class="menu">
				<ul>
					<li class="person active">
						<a href="index.html"><i class="am-icon-user"></i>个人中心</a>
					</li>
					<li class="person">
						<p><i class="am-icon-newspaper-o"></i>个人资料</p>
						<ul>
							<li> <a href="information.html">个人信息</a></li>
							<li> <a href="safety.html">安全设置</a></li>
							<li> <a href="address.html">地址管理</a></li>
							<li> <a href="cardlist.html">快捷支付</a></li>
						</ul>
					</li>
					<li class="person">
						<p><i class="am-icon-balance-scale"></i>我的交易</p>
						<ul>
							<li><a href="order.html">订单管理</a></li>
							<li> <a href="change.html">退款售后</a></li>
							<li> <a href="comment.html">评价商品</a></li>
						</ul>
					</li>
					<li class="person">
						<p><i class="am-icon-dollar"></i>我的资产</p>
						<ul>
							<li> <a href="points.html">我的积分</a></li>
							<li> <a href="coupon.html">优惠券 </a></li>
							<li> <a href="bonus.html">红包</a></li>
							<li> <a href="walletlist.html">账户余额</a></li>
							<li> <a href="bill.html">账单明细</a></li>
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-tags"></i>我的收藏</p>
						<ul>
							<li> <a href="collection.html">收藏</a></li>
							<li> <a href="foot.html">足迹</a></li>														
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-qq"></i>在线客服</p>
						<ul>
							<li> <a href="consultation.html">商品咨询</a></li>
							<li> <a href="suggest.html">意见反馈</a></li>							
							
							<li> <a href="news.html">我的消息</a></li>
						</ul>
					</li>
				</ul>

			</aside>
		</div>
<?php
	}
}
?>
	</body>

</html>