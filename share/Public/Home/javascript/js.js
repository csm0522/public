function showLogin() {
	$('.regMain').hide();
	$('.LoginMain').show();
	$('#Lbtn').removeClass();
	$('#Lbtn').addClass('Lbtn');
	$('#Rbtn').removeClass();
	$('#Rbtn').addClass('Rbtn');
}

function showReg() {
	$('.regMain').show();
	$('.LoginMain').hide();
	$('#Lbtn').removeClass();
	$('#Lbtn').addClass('Lbtn1');
	$('#Rbtn').removeClass();
	$('#Rbtn').addClass('Rbtn1');
}

function check_username_len(thisObj) {
	var pattern = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){5,11}$/;
	var re = new RegExp(pattern);
	if (thisObj.value.length == 0) {
		$('#RemiRMes').html("用户名不能为空");
		return false;
	} else {
		if (!re.test(thisObj.value)) {
			$('#RemiRMes').html("6-12个以字母开头、数字、下划线");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length < 6) {
			$('#RemiRMes').html("用户名长度不少于6个字符");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length > 12) {
			$('#RemiRMes').html("用户名长度不超过12个字符");
			return false;
		}
		$('#RemiRMes').html("");
		return true;
	}
}

function check_len(thisObj) {
	var pattern = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){5,11}$/;
	var re = new RegExp(pattern);
	if (thisObj.value.length == 0) {
		$('#RemiRMes').html("密码不能为空");
		return false;
	} else {
		if (!re.test(thisObj.value)) {
			$('#RemiRMes').html("6-12个以字母开头、数字、下划线");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length < 6) {
			$('#RemiRMes').html("密码长度不少于6");
			return false;
		}
		$('#RemiRMes').html("");
		return true;
	}
}

function submit_reg() {
	if (check_len() && check_pass()) {
		return true;
	} else {
		return false;
	}
}
function check_login(thisObj) {
	var pattern = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){5,11}$/;
	var re = new RegExp(pattern);
	if (thisObj.value.length == 0) {
		$('#RemiLMes').html("用户名不能为空");
		return false;
	} else {
		if (!re.test(thisObj.value)) {
			$('#RemiLMes').html("6-12个以字母开头、数字、下划线");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length < 6) {
			$('#RemiLMes').html("用户名长度不少于6个字符");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length > 12) {
			$('#RemiLMes').html("用户名长度不超过12个字符");
			return false;
		}
		$('#RemiLMes').html("");
		return true;
	}
}

function check_login_pwd(thisObj) {
	var pattern = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){5,11}$/;
	var re = new RegExp(pattern);
	if (thisObj.value.length == 0) {
		$('#RemiLMes').html("密码不能为空");
		return false;
	} else {
		if (!re.test(thisObj.value)) {
			$('#RemiLMes').html("6-12个以字母开头、数字、下划线");
			return false;
		} else if (re.test(thisObj.value) && thisObj.value.length < 6) {
			$('#RemiLMes').html("密码长度不少于6");
			return false;
		}
		$('#RemiLMes').html("");
		return true;
	}
}

function submit_reg() {
	if (check_login() && check_login_pwd()) {
		return true;
	} else {
		return false;
	}
}
