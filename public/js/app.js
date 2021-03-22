$(document).ready(function (){
    $('.js-btnpaso1').click(paso2);
})
function paso2() {
    $('.paso1').addClass('d-none');
    $('.paso2').removeClass('d-none');
    
    ischecked1 = document.getElementById('js-check1').checked;
    ischecked2 = document.getElementById('js-check2').checked;
    ischecked3 = document.getElementById('js-check3').checked;
    ischecked4 = document.getElementById('js-check4').checked;
    ischecked5 = document.getElementById('js-check5').checked;
    ischecked6 = document.getElementById('js-check6').checked;
    ischecked7 = document.getElementById('js-check7').checked;

    if (ischecked1 && ischecked2) {
        $('.titulopaso2').append('Cuéntanos más sobre tu web corporativa/catálogo ¿Cómo debe ser?');
    }
    else if (ischecked1) {
        $('.titulopaso2').append('Cuéntanos más sobre tu web corporativa ¿Cómo debe ser?');
    }
    else if (ischecked2) {
        $('.titulopaso2').append('Cuéntanos más sobre tu web catálogo ¿Cómo debe ser?');
    }
    else if (ischecked3) {
        $('.js-opensh').removeClass('d-none');
        $('.titulopaso2').append('Cuéntanos más sobre tu tienda online ¿Cómo debe ser?');
    }
    else if (ischecked4) {
        $('.js-motorreservas').removeClass('d-none');
        $('.titulopaso2').append('Cuéntanos más sobre tu web motor de reservas ¿Cómo debe ser?');
    }
    else if (ischecked5) {
        $('.js-delivery').removeClass('d-none');
        $('.titulopaso2').append('Cuéntanos más sobre tu web para restaurante con motor de delivery ¿Cómo debe ser?');
    }
    else if (ischecked6) {
        $('#js-webderenting').addClass('d-none');
        $('.titulopaso2').append('Cuéntanos más sobre tu proyecto de servidor y/o dominio que necesitas ¿Cómo debe ser?');
    }
    else if (ischecked7) {
        $('#js-webderenting').addClass('d-none');
        $('.titulopaso2').append('Cuéntanos más sobre el proyecto que necesitas ¿Cómo debe ser?');
    }
}