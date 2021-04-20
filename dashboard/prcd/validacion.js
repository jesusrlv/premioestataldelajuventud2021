function validarInput(input) {
	var curp = input.value.toUpperCase(),
    	resultado = document.getElementById("result-username2"),
        valido = "No válido";
        
    if (curpValida(curp)) {
    	valido = "Válido";
        // resultado.classList.add("ok");
        resultado.innerHTML ='<div class="alert alert-success"><strong><i class="bi bi-info-circle-fill"></i> CORRECTO. </strong> Cadena CURP correcta.</div>';
    } else {
        resultado.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
    }
        
    // resultado.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
}

function curpValida(curp) {
	var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
    	validado = curp.match(re);
	
    if (!validado)  //Coincide con el formato general?
    	return false;
    
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if(lngDigito == 10)
            return 0;
        return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1])) 
    	return false;
        
	return true; //Validado
}

//Fecha de nacimiento

// function edad() {
//     var dato = document.getElementById("username").value;
//     var variable_annio = dato.substring(4,6);
//     var variable_mes = dato.substring(6,8);
//     var variable_dia = dato.substring(8,10);
//     document.getElementById("result-dato").innerHTML = variable_annio +'/'+ variable_mes +'/'+ variable_dia;
//     }






//Cálculo de edad

//calcular la edad de una persona
//recibe la fecha como un string en formato español
//devuelve un entero con la edad. Devuelve false en caso de que la fecha sea incorrecta o mayor que el dia actual
function calcular_edad(fecha){

    var dato = document.getElementById("username").value;
    var variable_annio = dato.substring(4,6);
    var variable_mes = dato.substring(6,8);
    var variable_dia = dato.substring(8,10);
    
    // document.getElementById("result-dato").innerHTML = variable_annio +'/'+ variable_mes +'/'+ variable_dia;

    //calculo la fecha de hoy
    hoy=new Date()
    //alert(hoy)

    //calculo la fecha que recibo
    //La descompongo en un array
    
    var fecha = variable_annio +'/'+ variable_mes +'/'+ variable_dia;
    var array_fecha = fecha.split("/")
    //si el array no tiene tres partes, la fecha es incorrecta
    if (array_fecha.length!=3)
       return false

    //compruebo que los ano, mes, dia son correctos
    var ano
    ano = parseInt(array_fecha[2]);
    if (isNaN(ano))
       return false

    var mes
    mes = parseInt(array_fecha[1]);
    if (isNaN(mes))
       return false

    var dia
    dia = parseInt(array_fecha[0]);
    if (isNaN(dia))
       return false


    //si el año de la fecha que recibo solo tiene 2 cifras hay que cambiarlo a 4
    if (ano<=99)
       ano +=1900

    //resto los años de las dos fechas
    edad=hoy.getYear()- ano - 1; //-1 porque no se si ha cumplido años ya este año

    //si resto los meses y me da menor que 0 entonces no ha cumplido años. Si da mayor si ha cumplido
    if (hoy.getMonth() + 1 - mes < 0) //+ 1 porque los meses empiezan en 0
       return edad
    if (hoy.getMonth() + 1 - mes > 0)
       return edad+1

    //entonces es que eran iguales. miro los dias
    //si resto los dias y me da menor que 0 entonces no ha cumplido años. Si da mayor o igual si ha cumplido
    if (hoy.getUTCDate() - dia >= 0)
       return edad + 1

    // return edad

    var resultado_fecha = document.getElementById("result-dato");

    if (edad => 12) {
    	valido = "Válido";
        // resultado.classList.add("ok");
        resultado_fecha.innerHTML ='<div class="alert alert-success"><strong><i class="bi bi-info-circle-fill"></i> CORRECTO. </strong> Cadena CURP correcta.</div>';
    } else {
        resultado_fecha.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
    }

    // document.getElementById("result-dato").innerHTML = edad;

    

} 


