<?php
//login数据模型model
namespace Model;
use Think\Model;

class loginModel extends Model {
	function login($name) {
		echo $this -> fields['name'];
		$res = $this -> query("select * from t_login where name='$name'");
		return $res;

	}

}
?>