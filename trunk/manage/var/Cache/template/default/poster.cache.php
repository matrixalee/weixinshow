<?php if (!class_exists('template', false)) die('Access Denied');
0
|| self::check('default\poster.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\manage\application\View\default\poster.tpl', 1465296096)
|| self::check('default\poster.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\manage\application\View\default\inc/header_paul.tpl', 1465296096)
|| self::check('default\poster.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\manage\application\View\default\inc/sidebar_paul.tpl', 1465296096)
|| self::check('default\poster.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\manage\application\View\default\inc/footer_paul.tpl', 1465296096)
;?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="apple-touch-icon-precomposed" href="/i/app-icon72x72@2x.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>用户中心</title>
		<meta name="description" content="用户中心">
		<meta name="keywords" content="index">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="renderer" content="webkit">
		<meta name="apple-mobile-web-app-title" content="Amaze UI" />
		<link href="<?php echo $BASE_V;?>assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $BASE_V;?>assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $BASE_V;?>css/base.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $BASE_V;?>css/page.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $BASE_V;?>css/order_detail.css" type="text/css" rel="stylesheet">

	</head>

	<body>
<!-- header start -->
  <header class="am-topbar admin-header">
    <div class="am-topbar-brand">
      <img src="<?php echo $BASE_V;?>image/logo-blue.png">用户中心
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
       <!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>-->
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            <span class="am-icon-users"></span> [<?php echo $memberInfo->mobile;?>]我的银品惠 <span class="am-icon-caret-down"><?php if($memberSettingInfo->security_deposit>0 && $memberInfo->member_type==2) { ?>保证金：￥<?php echo $memberSettingInfo->security_deposit;?><?php } else { echo $member_type_class_text;?><?php } ?></span>
          </a>
          <ul class="am-dropdown-content">
            <!--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
            <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>-->
            <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=account.loginout"><span class="am-icon-power-off"></span> 退出</a></li>
          </ul>
        </li>
        <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
      </ul>
    </div>
  </header>
  <!-- header end --><div class="am-cf admin-main">    <style type="text/css">
    	.closed{
    		width: auto;
    	} 	
    	.closed #slider_bar{
    		display: inline;
    	}
    	#open_menu{display: none;}
    </style>
    
    	
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas closed" id="admin-offcanvas">
    	<div id="open_menu"  style="background-color: #fff;">
    		<a class="am-btn am-padding-sm am-btn-success" href="#" title="展开菜单">
    			<i class="am-icon-fw am-icon-angle-double-right"></i></a>
    	</div>
      <div id="slider_bar" class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
          <li><a href="#" id="close_menu"><span class="am-icon-fw am-icon-list-ul am-text-warning"></span><span class="am-text-warning">收起菜单</span><span class="am-icon-angle-double-left am-text-warning am-icon-fw am-fr am-margin-right-sm"></span></li></a>
          <li class="admin-parent">
            <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-home am-icon-sm am-icon-fw"></span> 我的银品惠 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
            <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
        			  <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=bill.home" class="am-cf"><span class="am-icon-rmb am-icon-fw"></span> 账户中心</a></li>
        			  <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=settle.apply"><span class="am-icon-credit-card am-icon-fw"></span> 我要提现</a></li>
        			  <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=shop.detail" class="am-cf"><span class="am-icon-gears am-icon-fw"></span> 店铺设置</a></li>			  			   
                <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=goods.index" class="am-cf"><span class="am-icon-list am-icon-fw"></span> 商品管理<span class="am-badge am-badge-secondary am-margin-right am-fr"> </span></a></li>			  			  			  			  
                <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=poster"><span class="am-icon-puzzle-piece am-icon-fw"></span> 广告位管理</a></li>
            </ul>
          </li>
          <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=order.index"><span class="am-icon-table am-icon-fw"></span> 订单管理</a></li>
          <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=order.refund"><span class="am-icon-table am-icon-area-chart"></span> 维权订单</a></li>          

          <li class="admin-parent">
            <a class="am-cf" data-am-collapse="{target: '#article-nav'}">
              <span class="am-icon-home am-icon-sm am-icon-fw"></span> 文章管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
            </a>
            
            <ul class="am-list am-collapse admin-sidebar-sub am-in" id="article-nav">
                <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=archives.arclist" class="am-cf"><span class="am-icon-rmb am-icon-fw"></span> 文章列表</a></li>
                <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=archives.add"><span class="am-icon-credit-card am-icon-fw"></span> 文章发布</a></li>                
            </ul>
           </li>
		  
		       <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=statistics.detail&type=order"><span class="am-icon-table am-icon-pie-chart"></span> 统计  </a></li>
										
		  
			     <li><a href="<?php echo MOBILE_URL; echo PHP_SELF; ?>?m=account.loginout"><span class="am-icon-sign-out am-icon-fw"></span> 注销</a></li>
        </ul>        
        <div class="am-panel am-panel-default admin-sidebar-panel">
          <div class="am-panel-bd">
            <p><span class="am-icon-tag"></span> 最新消息</p>
            <p>云端产品库已经发布！
              <br></p>
          </div>
        </div>
      </div>
    </div>
    <!-- sidebar end --><!-- content start -->
			<div class="admin-content">
				<div class="am-cf am-padding">
					<div class="am-fl"><strong class="am-text-primary am-text-lg">广告位管理</strong></div>
				</div>

				<div class="am-u-md-12">
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}"><font class="bill_type_info">商城广告位</font><span class="am-icon-chevron-down am-fr"></span></div>
						<div id="collapse-panel-2" class="am-in">
							<table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
								<thead>
									<tr>
										<th>广告位</th>
										<th>自定义状态</th>										
										<th>操作</th>
									</tr>
								</thead>
								<tbody style="display: none;" id="bill_list_loading">
									<tr>
										<td colspan="3" class="am-text-center">
												<div class="am-modal-hd"><img  src="<?php echo $BASE_V;?>img/loading.gif">正在载入...</div>
										</td>
									</tr>

								</tbody>
								<tbody style="display:none">
									<tr>
										<td class="am-text-center" colspan="3">
												<div class="am-modal-hd">很抱歉，没有找到结果...</div>
										</td>
									</tr>
								</tbody>
								<tbody id="tbody_html">
								<?php if(is_array($poster_custom_array)) foreach($poster_custom_array AS $poster_name => $poster_title) { ?>
								  <tr>
									<td class="am-text-left"><?php echo $poster_title;?></td>
									<td class="am-text-middle" id="<?php echo $poster_name;?>_show">
									<?php if(!empty($poster_array[$poster_name])) { ?>
									已经设置自定义广告位
									<?php } else { ?>
									未设置自定义广告位
									<?php } ?>
									</td>		
									<td class="am-text-middle"><a href="<?php echo PHP_SELF; ?>?m=poster.add&poster_name=<?php echo $poster_name;?>">修改/设置</a> | <a class="delete_poster" href="javascript:void(0)" data-id="<?php echo $poster_name;?>">删除自定义广告</a></td>
								  </tr>
								<?php } ?>
								</tbody>
								<tfoot>
								<tr>
									<td colspan="3" class="am-text-center page pagination"></td>
								</tr>
							</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
		<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
		<!-- content end --><footer>
	<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
		<div class="am-modal-dialog">
			<div class="am-modal-hd">银品惠提醒</div>
			<div class="am-modal-bd">
				来来来，吐槽点啥吧
			</div>
			<input type="text" class="am-modal-prompt-input">
			<hr>	
			<div class="am-modal-footer">
				
				<span class="am-modal-btn" data-am-modal-cancel>取消</span>
				<span class="am-modal-btn" data-am-modal-confirm>提交</span>
			</div>
		</div>
	</div>

	<div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
		<div class="am-modal-dialog">
			<div class="am-modal-hd">银品惠提醒</div>
			<div class="am-modal-bd" id="confirm_content">
				你，确定要删除这条记录吗？
			</div>
			<div class="am-modal-footer">
				<span class="am-modal-btn" data-am-modal-cancel>取消</span>
				<span class="am-modal-btn" data-am-modal-confirm>确定</span>
			</div>
		</div>
	</div>
	<hr>
	<p class="am-padding-left am-text-center">© 2015 银品惠, Inc.</p>
</footer></body>

</html>
<script>
	var index_url = '<?php echo MOBILE_URL; ?>';
	var static_url = '<?php echo STATIC_URL; ?>';
	var base_v = '<?php echo $BASE_V;?>';
	var php_self = '<?php echo PHP_SELF; ?>';
	var param = {
		status: '',
		pagesize: 6,
		page: 1,
		totalput: 0
	}
</script>
<script src="<?php echo $BASE_V;?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $BASE_V;?>assets/js/amazeui.js" type="text/javascript"></script>
<script src="<?php echo STATIC_URL; ?>js/jquery-plugin/jquery.pagination-min.js" type="text/javascript"></script>
<script src="<?php echo $BASE_V;?>js/common.js" type="text/javascript"></script>
<script src="<?php echo STATIC_URL; ?>js/jquery-plugin/ui/minified/jquery.cookie-min.js" type="text/javascript"></script>
<script src="<?php echo $BASE_V;?>js/modal_html.js" type="text/javascript"></script>
<script language="javascript">
$(document).ready(function(){
	$('#tbody_html .delete_poster').click(function(){
		var poster_title = $(this).attr('data-id');
		$.ajax({
			type: "POST",
			url: index_url + php_self + '?m=poster.batch',
			dataType: "json",
			data: {
				action: 'del',
				id: poster_title
			},
			cache: false,
			success: function(data) {
				//console.log(data);
				if (data.success == true) {
					$('#'+poster_title+'_show').text('未设置自定义广告位');
					M._alert('删除广告位成功');							
				} else {					
					M._alert(data.message);					
				}
			}
		});
	});
});
</script>