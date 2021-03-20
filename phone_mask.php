//HTML

<div>	
	<form method="post" action="">
		<label for="phone">Введите ваш номер телефона:</label>
		<input required type="tel" id="phone" name="up_phone" value="" placeholder="+7 (900) 123-45-67" pattern="\+7\s?\(\d{3}\)\s?\d{3}-\d{2}-\d{2}" onkeydown = "javascript: return ((event.keyCode>47)&&(event.keyCode<58)||(event.keyCode==8))" onkeyup="mask()" maxlength="18">
		<input type="submit" value="Отправить">
	</form>
</div>

//скрипт

<script type="text/javascript">
function mask(){

let val = document.getElementById('phone').value.replace(/[^\d]/g,'');

	if(val[0] != "+" && val[0] != null){
		val="+"+val.slice(0);
	}

	if(val[1] != 7 && val[1] != null){
		val=val.slice(0,1)+"7"+val.slice(1);
	}

	if(val[2] != " " && val[2] != null){
		val=val.slice(0,2)+" "+val.slice(2);
	}

	if(val[3] != "(" && val[3] != null){
		val=val.slice(0,3)+"("+val.slice(3);
	}

	if(val[7] != ")" && val[7] != null){
		val=val.slice(0,7)+")"+val.slice(7);
	}

	if(val[8] != " " && val[8] != null){
		val=val.slice(0,8)+" "+val.slice(8);
	}

	if(val[12] != "-" && val[12] != null){
		val=val.slice(0,12)+"-"+val.slice(12);
	}

	if(val[15] != "-" && val[15] != null){
		val=val.slice(0,15)+"-"+val.slice(15);
	}
	document.getElementById('phone').value=val;

	if (document.getElementById('phone').value.length > 18){
        	document.getElementById('phone').value=document.getElementById('phone').value.slice(0, -1);
	}
}
</script>