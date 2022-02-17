$(function(){

    var atual = -1;
    var maximo = $('.box-especialidades').length - 1;
    var timer;

    carregarAnimacao();

    function carregarAnimacao(){
        $('.box-especialidades').hide();
        timer = setInterval(logicaAnimacao, 2500);
        function logicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(timer);
                return false
            }
            $('.box-especialidades').eq(atual).fadeIn();
        }
    }

})