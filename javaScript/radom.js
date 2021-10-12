function random (){
    var url ='' ;
    var metodo='POST';
    var parametros ='actualizar';
    parametros ='$nombre='+document.getElementById('nombre').nodeValue;
    parametros ='$link1='+document.getElementById('link1').value;
    parametros ='$link2='+document.getElementsByClassName('link2').value;
    var contenedor ='contendor';
    var img ='<img src="img/giphy.gif">';
    ajax(url, metodo, parametros, contenedor, img);

}


function ajax(url, metodo, parametros, contenedor, img) {
    if(window.XMLHttpRequest){

        xml = new XMLHttpRequest();


    }else{
        try {
            xml = new ActiveXObject("Microsoft.XMLHTTP")
        } catch (e1) {
            alert("Navegador imcompatible");
        }
    }

    xml.onreadystatechange = function () {
        if(xml.readyState==4){
            document.getElementById(contenedor).innerHTML= xml.responseText;
        }else{
            document.getElementById(contenedor).innerHTML= img;
        }
    }

    xml.open(metodo, url, true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send(parametros);
}