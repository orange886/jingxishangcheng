<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: category_list.htm 17019 2010-01-29 10:10:34Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品展示 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="__GROUP__/Category/categoryAdd">添加分类</a></span>
    <span class="action-span1"><a href="__GROUP__">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 商品展示 </span>
    <div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <table width="100%" cellspacing="1" cellpadding="2" id="list-table">
            <tr>
                <th>分类名称</th>
                <th>是否推荐</th>
                <th>操作</th>
            </tr>

            <?php if(is_array($catInfo)): foreach($catInfo as $key=>$info): ?><tr align="center" class="0">
                <td align="left" class="first-cell" >
                
                <img src="/Public/Admin/Imagesmenu_minus.gif" id="0_1" width="9" height="9" border="0" style="margin-left:0em"/><!-- 0改成<?php echo ($info['lev']); ?>-->
                <span><a href="javascript:void(0)"><?php echo ($info['cname']); ?></a></span>
                </td>
                <td width="15%"><img src="/Public/Admin/Images/confirm.gif"  /></td>
                
                <td width="30%" align="center">
                <a href="<?php echo U('Admin/cat/categoryedit',array('cat_id'=>$info['cat_id']));?>" title="编辑">编辑</a> |
                <a href="<?php echo U('Admin/cat/categorydel',array('cat_id'=>$info['cat_id']));?>" title="移除">移除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>
    </div>
</form>
<div id="footer">
共执行 1 个查询，用时 0.055904 秒，Gzip 已禁用，内存占用 2.202 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>