<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
function checkAll(form1,status){    //全选
	var elements=form1.getElementsByTagName('input');
	for(var i=0;i<elements.lengthl;i++){
		if(elements[i].type=='checkbox'){   //判断当前对象元素类型是否为checkbox
			if(elements[i].checked==false){  
				elements[i].checked==true;
			}
		}
	}
}
function switchAll(form1,status){    //反选
	var elements=form1.getElementsByTagName('input');
	for(var i=0;i<elements.lengthl;i++){
		if(elements[i].type=='checkbox'){   //判断当前对象元素类型是否为checkbox
			if(elements[i].checked==false){  
				elements[i].checked==true;
			}else if(elements[i].checked==false){
				elements[i].checked==true;
			}
		}
	}
}
function uncheckAll(form1,status){    //不选
	var elements=form1.getElementsByTagName('input');
	for(var i=0;i<elements.lengthl;i++){
		if(elements[i].type=='checkbox'){   //判断当前对象元素类型是否为checkbox
			if(elements[i].checked==true){  
				elements[i].checked==false;
			}
		}
	}
}
</script>
</head>

<body>
<form method="post" name="form1" action="">
<table width="547" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FBA720">
<tr>
	<td height="35" colspan="5"><span class="style1">订单管理</span></td>
</tr>
<tr>
	<td width="77" align="right">说明：</td>
    <td width="389"><textarea name="readme" cols="50" rows="10" id="readme" ></textarea></td>
    <td width="63" height="33">
    <a href="#" onclick="javascript: document.getElementById('readme').value='';return false"><font>清除</font></a>
    </td>
</tr>
<tr>
	<td rowspan="6" align="right">操作：</td>
    <td height="30" colspan="2" align="left" >
    <input name="php3" type="checkbox" id="php3" value="php"/>php编程词典全能版
    <input name="php3" type="checkbox" id="php3" value="c++"/>C++编程词典全能版
    <input name="php3" type="checkbox" id="php3" value="java"/>java编程词典全能版
    </td>
</tr>
<tr>
	<td colspan="5" align="center">操作：</td>
    <img src="upload/c5b3d41942be12caefd590bcc36411b8.jpg" width="60" height="25" onclick="checkAll(form1,status)"  />
    <img src="upload/c5b3d41942be12caefd590bcc36411b8.jpg" width="60" height="25" onclick="switchAll(form1,status)"  />
    <img src="upload/c5b3d41942be12caefd590bcc36411b8.jpg" width="60" height="25" onclick="uncheckAll(form1,status)"  />
    </td>
</tr>
</table>
</form>
</body>
</html>