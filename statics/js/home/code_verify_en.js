function comment_check() {
	if (document.form1.title.value == '') {
		window.alert('Please enter the topic ^_^');
		document.form1.title.focus();
		return false;
	}

	if (document.form1.name.value == '') {
		window.alert('Please enter your name ^_^');
		document.form1.name.focus();
		return false;
	}

	var phone = document.form1.phone.value;

	if (phone == '') {
		window.alert('Please enter the telephone number ^_^');
		document.form1.phone.focus();
		return false;
	}

	var myreg = /^(((13[0-9]{1})|15[0-9]{1}|18[0-9]{1}|)+\d{8})$/;

	if (phone.length!=11 || !myreg.test(phone)) {		
		window.alert("Please enter the correct mobile phone number ^_^");
		document.form1.phone.focus();
		return false;
	}

	if (document.form1.email.value == '') {
		window.alert('Please enter e-mail ^_^');
		document.form1.email.focus();
		return false;
	}

	if (document.form1.email.value.length > 0 && !document.form1.email.value.indexOf('@') == -1 | document.form1.email.value.indexOf('.') == -1) {
		window.alert('Please enter the correct email address, example: webmaster@hitux.com');
		document.form1.email.focus();
		return false;
	}

	if (document.form1.qq.value == '') {
		window.alert('Please enter QQ ^_^');
		document.form1.qq.focus();
		return false;
	}

	var reQQ = /^[1-9]\d{4,9}$/; 
  	if(!reQQ.test(document.form1.qq.value)){
		window.alert("Please enter the correct QQ ^_^");
		document.form1.qq.focus();
		return false;
	}

	if (document.form1.content.value == '') {
		window.alert('Please enter the content ^_^');
		document.form1.content.focus();
		return false;
	}

	var codeVal = document.form1.verycode.value;
	if (codeVal == '') {
		window.alert('Please enter the verification code ^_^');
		document.form1.verycode.focus();
		return false;
	}

	return true;
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
		alert('Verify matching！');
	},
	error: function() {
		alert('erification code mismatch！');
	}
});
$('#codeVerify .verify-change-code').html('');