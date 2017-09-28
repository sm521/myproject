<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
function lmenu(value){
	switch(value)
	{
		case '新品'：
		submemu.innerHTML="<a href="#">商品展示</a>|<a href="#">销售排行榜</a>|<a href="#">商品查询</a>";
		break;
		case '购物'：
		submemu.innerHTML="<a href="#">添加商品</a>|<a href="#">移除指定商品</a>|<a href="#">清空购物车</a>";
		break;
		case '会员'：
		submemu.innerHTML="<a href="#">注册会员</a>|<a href="#">修改会员</a>|<a href="#">账户查询</a>";		
		break;
	}
}
</script>
</head>

<body>
<table width="761" height="20" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="67" align="center"><a href="index.php">首页</a></td>
    <td width="75" align="center"><a href="#"  onmousemove="lmenu('新品')">新品上架</a></td>
    <td width="75" align="center"><a href="#" onmousemove="lmenu('购物')">购物车</a></td>
    <td width="75" align="center"><a href="#" onmousemove="lmenu('会员')">会员中心</a></td>
    
</tr>
</table>
<div id="submenu" class="word_yellow">&nbsp;</div>
</body>

</html>