$(function(){
    //AQUI VAI TODO O CÓDIGO JAVASCRIPT
    $('nav.mobile').click(function(){
        var listaMenuMobile = $('nav.mobile ul');
        /*
        //Abrir sem efeito
        if(listaMenuMobile.is(':hidden') == true)
            listaMenuMobile.css('display','block');
        else
            listaMenuMobile.css('display','none');
        */
        /*
        //Abrir menu atraves do fadeIn
        if (listaMenuMobile.is(':hidden') == True ) {
            listaMenuMobile.fadeIn();
        } else {
            listaMenuMobile.fadeOut();
        }
        */

        /*
        if (listaMenuMobile.is(':hidden') == True )
            listaMenuMobile.show();
        else
            listaMenuMobile.hide();
        */

        if(listaMenuMobile.is(':hidden') == true){
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenuMobile.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenuMobile.slideToggle();
        }
        
    });
    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;

        $('html,body').animate({'scrollTop':divScroll},1000);
    }

    LoadDynamic();
    function LoadDynamic(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');

            $('.container-principal').load(include_path+'pages/'+pagina+'.php');
            
            return false;
        })
    }
})