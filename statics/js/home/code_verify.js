function comment_check() {
	if (document.form1.title.value == '') {
		window.alert('请输入主题^_^');
		document.form1.title.focus();
		return false;
	}

	if (document.form1.name.value == '') {
		window.alert('请输入姓名^_^');
		document.form1.name.focus();
		return false;
	}

	var phone = document.form1.phone.value;

	if (phone == '') {
		window.alert('请输入电话^_^');
		document.form1.phone.focus();
		return false;
	}

	var myreg = /^(((13[0-9]{1})|15[0-9]{1}|18[0-9]{1}|)+\d{8})$/;

	if (phone.length!=11 || !myreg.test(phone)) {		
		window.alert("请输入正确的手机号码^_^");
		document.form1.phone.focus();
		return false;
	}

	if (document.form1.email.value == '') {
		window.alert('请输入电子邮件^_^');
		document.form1.email.focus();
		return false;
	}

	if (document.form1.email.value.length > 0 && !document.form1.email.value.indexOf('@') == -1 | document.form1.email.value.indexOf('.') == -1) {
		window.alert('请输入正确的Email地址，如:webmaster@hitux.com');
		document.form1.email.focus();
		return false;
	}

	if (document.form1.qq.value == '') {
		window.alert('请输入QQ^_^');
		document.form1.qq.focus();
		return false;
	}

	var reQQ = /^[1-9]\d{4,9}$/; 
  	if(!reQQ.test(document.form1.qq.value)){
		window.alert("请输入正确的QQ^_^");
		document.form1.qq.focus();
		return false;
	}

	if (document.form1.content.value == '') {
		window.alert('请输入内容^_^');
		document.form1.content.focus();
		return false;
	}

	var codeVal = document.form1.verycode.value;
	if (codeVal == '') {
		window.alert('请输入验证码^_^');
		document.form1.verycode.focus();
		return false;
	}

	// return true;
	return false;
}
// 图片看不清？点击重新得到验证码
$('#codeVerify').codeVerify({
	type: 1,
	width: '70px',
	height: '25px',
	fontSize: '16px',
	codeLength: 4,
	btnId: 'dosubmit',
	ready: function() {},
	success: function() {
		alert('验证匹配！');
	},
	error: function() {
		alert('验证码不匹配！');
	}
});
$('#codeVerify .verify-change-code').html('');