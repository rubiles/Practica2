/*  NO LO PUDO COMPROBAR SI FUNCIONA SIN UN MONITOR HD__ EL SIMULADOR DE MOZILLA NI EL DE CHROME CAMBIA DICHA VARIABLE SCREEN.WIDTH

window.onload=mapa_resolucion;

function mapa_resolucion(){
	var h=window.screen.availHeight;
	var w=window.screen.availWidth;
	var imagen=document.getElementById('marco2img');
	if(w>=1900 && h>=1000){
		//carga hd:
			imagen.src='../images/bujero_gris.png';		//casmbiar imagen 
			imagen.usemap='mapHD'; //cambiar usemap
		
	}
}	
*/
function fondo_con(){
	document.body.style.background ="url('./images/fondo.png')  no-repeat center center fixed; ";
}
function fondo_sin(){
	document.body.style.backgroundImage ="url('./images/image22.jpg') no-repeat center center fixed; ";
}


function marco2(){
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='visible';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='hidden';
	
fondo_con();
}

function faces(){

	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='visible';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
	
	fondo_sin();
}

function fruits(){
fondo_sin();
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='visible';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
}

function weddings(){
fondo_sin();
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='visible';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
}

function nature(){
fondo_sin();
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='visible';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
}

function cars(){
fondo_sin();
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='visible';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='hidden';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
}

function fashion(){
fondo_sin();
	var fotos1=document.getElementById('fotos1');
	fotos1.style.visibility='hidden';
	
	var fotos2=document.getElementById('fotos2');
	fotos2.style.visibility='hidden';
	
	var fotos3=document.getElementById('fotos3');
	fotos3.style.visibility='hidden';
	
	var fotos4=document.getElementById('fotos4');
	fotos4.style.visibility='hidden';

	var fotos5=document.getElementById('fotos5');
	fotos5.style.visibility='hidden';

	var fotos6=document.getElementById('fotos6');
	fotos6.style.visibility='visible';

	var marco=document.getElementById('marco');
	marco.style.visibility='hidden';

	var marco2=document.getElementById('marco2');
	marco2.style.visibility='visible';
}
