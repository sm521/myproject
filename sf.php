<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约瑟夫问题</title>
</head>

<body>

<?php

	class child{
		public $no;
		public $next;
		
		public function __construct($no){
			$this->no = $no;
		}
		
	}

	$first = null;
	$n = 6;
	
	function addchild(&$first,$n){
		$cur = null;
		for($i=0;$i<$n;$i++){
			
			$child = new child($i+1);
			if($i==0){
				$first = $child;
				$child->next = $first;
				$cur = $first;
			}else{
				$cur->next = $child;
				$child->next = $first;
				$cur = $cur->next;
			}
			
		}
	}
	
	//思考一个问题，为什么addchild  需要& 符号   其他不用？？
	
	function showchild($first){
		
		$cur = $first;
		//显示
		while($cur->next != $first){
			echo '小孩的编号是'.$cur->no.'</br>';
			$cur = $cur->next;
		}
		//最后一个
		echo '小孩的编号是'.$cur->no.'</br>';
	}
	
	
	function countchild($first){
		//$tail 辅助变量，让它在$first的上一个
		$tail = $first;
		while($tail->next != $first){
			$tail = $tail->next;
		}
		//执行完循环，$tail 是￥first的上一个。
		
		//开始数数  数4
		while($tail != $first){
			for($i=0;$i<3;$i++){
				$first = $first->next;
				$tail = $tail->next;
			}
			
			echo '出局编号为'.$first->no.'</br>';
			$first = $first->next;
			$tail->next = $first; 
			
		}
		echo '最后剩下的小朋友是'.$tail->no;
		
	}
	
	
	
	addchild($first,$n);
	
	showchild($first);
	
	countchild($first);
	
?>
</body>
</html>