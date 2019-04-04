<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品展示 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/Styles/general.css" rel="Stylesheet" type="text/css" />
<link href="/Public/Admin/Styles/main.css" rel="Stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="">添加新商品</a></span>
    <span class="action-span1"><a href="">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 商品展示 </span>
    <div Styles="clear:both"></div>
</h1>
<div class="form-div">
    <form action="" name="searchForm">
        <img src="/Public/Admin/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
        <!-- 分类 -->
        <select name="cat_id">
            <option value="0">所有分类</option>
            
        </select>

        <!-- 推荐 -->
        <select name="intro_type">
            <option value="0">全部</option>
            <option value="is_rec">推荐</option>
            <option value="is_new">新品</option>
            <option value="is_hot">热销</option>
        </select>
        <!-- 上架 -->
        <select name="is_sale">
            <option value='0'>全部</option>
            <option value="1">上架</option>
            <option value="2">下架</option>
        </select>
        <!-- 关键字 -->
        关键字 <input type="text" name="keyword" size="15" />
        <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>

<!-- 商品列表 -->

    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th>编号</th>
                <th>商品名称</th>
                <th>货号</th>
                <th>价格</th>
                <th>上架</th>
                <th>推荐</th>
                <th>新品</th>
                <th>热销</th>
                <th>操作</th>
            </tr>

            <?php if(is_array($goodsList)): foreach($goodsList as $key=>$list): ?><tr>
                <td align="center"><?php echo ($list['goods_id']); ?></td>
                <td align="center" class="first-cell"><span><?php echo ($list['goods_name']); ?></span></td>
                <td align="center"><span onclick=""><?php echo ($list['goods_sn']); ?></span></td>
                <td align="center"><span><?php echo ($list['shop_price']); ?></span></td>
                <td align="center"><img src="/Public/Admin/Images/yes.gif "/></td>
                <td align="center"><img src="/Public/Admin/Images/yes.gif "/></td>
                <td align="center"><img src="/Public/Admin/Images/yes.gif "/></td>
                <td align="center"><img src="/Public/Admin/Images/yes.gif "/></td>
                <td align="center">
                <a href="<?php echo U('Admin/goods/goodsExamine',array('cate_id'=>$list['cate_id']));?>" target="_blank" title="查看"><img src="/Public/Admin/Images/icon_view.gif" width="16" height="16" border="0" /></a>
                <a href="<?php echo U('Admin/goods/goodsEdit',array('cate_id'=>$list['cate_id']));?>" title="编辑"><img src="/Public/Admin/Images/icon_edit.gif" width="16" height="16" border="0" /></a>
                <a href="<?php echo U('Admin/goods/goodsDel',array('cate_id'=>$list['cate_id']));?>" onclick="" title="回收站"><img src="/Public/Admin/Images/icon_trash.gif" width="16" height="16" border="0" /></a></td>
            </tr><?php endforeach; endif; ?>

        </table>

        <!-- 分页开始 -->
        <table id="page-table" cellspacing="0">
            <tr>
                <td align="right" nowrap="true" colspan="6">
                    <?php echo ($show); ?>
                </td>
            </tr>
        </table>
    <!-- 分页结束 -->
    </div>


<div id="footer">
共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>