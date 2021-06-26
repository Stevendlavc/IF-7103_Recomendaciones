//variable global
let arrayTextos=[];
	datos();

/*Funcion en donde obtenemos los datos que se guardaron en el controlador 
para poder ser utilizados en la vista, se guardan en la variable global*/
	function datos() {		
        $.ajax({
            url: '?controlador=Galeria&accion=textos',
            method: 'GET',
            
            success: function(textos) {
            	arrayTextos=textos;
                extraerTextos();
            }
        })
    }//fin datos

    
    function extraerTextos() {
        for(var i=0; i<arrayTextos.length;i++){
            if(arrayTextos[i].pagina==="Galeria"){
                document.getElementById('titulo').innerHTML=arrayTextos[i].titulo;  
                document.getElementById('descripción').innerHTML=arrayTextos[i].descripcion;                                                               
            }
        }
    }

     


   