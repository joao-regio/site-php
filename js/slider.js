$(function(){
    var curSlide = 0;
    var maxSlide = $('.banner-single').length - 1;

    initSlide();
    changeSlide();

    function initSlide(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show;
        for(var i = 0; i < maxSlide+1; i++){
            var content = $('.bullets').html();
            if(i == 0)
                content += '<span class="active-slide"></span>';
            else
                content += "<span></span>";
            $('.bullets').html(content)
        }
    }

    function changeSlide(){
        setInterval(() => {
            $('.banner-single').eq(curSlide).stop().fadeOut(1500);
            curSlide++;
            if(curSlide > maxSlide)
                curSlide = 0;
            $('.banner-single').eq(curSlide).stop().fadeIn(1500);
            $('.bullets span').removeClass('active-slide');
            $('.bullets span').eq(curSlide).addClass('active-slide');
        }, 3000 );
    }
    $('body').on('click','.bullets span', function (){
        var currentBullet = $(this);
        $('.banner-single').eq(curSlide).stop().fadeOut(1500);
        curSlide = currentBullet.index();
        $('.banner-single').eq(curSlide).stop().fadeIn(1500);
        $('.bullets span').removeClass('active-slide');
        currentBullet.addClass('active-slide');
    })
})