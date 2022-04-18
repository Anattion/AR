function buscar_email(elemento){
		if (elemento.value.length > 3) {
			document.getElementById("msg_erro").innerHTML=""
		} 
		else{
			document.getElementById("msg_erro").innerHTML="O nome deve possuir no mínimo 3 letras!"		
		}
	}