$(document).ready(function (){
    $('.js-btnpaso1').click(paso2);

    if (document.getElementById('js-check1').addEventListener('change' , function () {
        if ($('.check1').hasClass('checkmark')) {
            $('.check1').removeClass('checkmark');
        }
        else{
            $('.check1').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check2').addEventListener('change' , function () {
        if ($('.check2').hasClass('checkmark')) {
            $('.check2').removeClass('checkmark');
        }
        else{
            $('.check2').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check3').addEventListener('change' , function () {
        if ($('.check3').hasClass('checkmark')) {
            $('.check3').removeClass('checkmark');
        }
        else{
            $('.check3').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check4').addEventListener('change' , function () {
        if ($('.check4').hasClass('checkmark')) {
            $('.check4').removeClass('checkmark');
        }
        else{
            $('.check4').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check5').addEventListener('change' , function () {
        if ($('.check5').hasClass('checkmark')) {
            $('.check5').removeClass('checkmark');
        }
        else{
            $('.check5').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check6').addEventListener('change' , function () {
        if ($('.check6').hasClass('checkmark')) {
            $('.check6').removeClass('checkmark');
        }
        else{
            $('.check6').addClass('checkmark');
        }
    }));
    if (document.getElementById('js-check7').addEventListener('change' , function () {
        if ($('.check7').hasClass('checkmark')) {
            $('.check7').removeClass('checkmark');
        }
        else{
            $('.check7').addClass('checkmark');
        }
    }));

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