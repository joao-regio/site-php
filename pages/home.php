<section class="banner-container">
    <div style= "background-image: url('<?php echo INCLUDE_PATH; ?>images/banner.jpg')" class="banner-single"></div>
    <div style= "background-image: url('<?php echo INCLUDE_PATH; ?>images/work-2.jpg')" class="banner-single"></div>
    <div style= "background-image: url('<?php echo INCLUDE_PATH; ?>images/work-3.jpg')" class="banner-single"></div>
    <div class="overlay"></div>
    <div class="center">    
        <form method="post" autocomplete="off">
            <label for="email">Qual seu melhor email?</label>
            <input type="email" name="email" placeholder="Seu email..." required />
            <input type="hidden" name="identificador" value="form_home">  
            <input type="submit" name="acao" value="cadastrar" />
        </form>
        <div class="bullets"></div>
    </div>
</section>
    <br>
    <section id="sobre" class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>João Vitor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                Sed venenatis tortor quam, nec pulvinar elit elementum quis.
                Nam aliquam euismod ante, sit amet sagittis felis posuere eu. Nunc placerat elementum cursus.
                Proin auctor est eget risus convallis, et pharetra erat pretium. Nam posuere condimentum feugiat.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pulvinar commodo lorem.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                Sed venenatis tortor quam, nec pulvinar elit elementum quis. 
                Nam aliquam euismod ante, sit amet sagittis felis posuere eu. Nunc placerat elementum cursus.
                Proin auctor est eget risus convallis, et pharetra erat pretium. Nam posuere condimentum feugiat.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pulvinar commodo lorem.</p>
            </div>
            <div class="w50 left">
                <img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto-autor.jpg" />
            </div>
            <div class="clear"></div>
        </div>
        
    </section>
    <br>
    <section class="especialidades">
        <div class="center">
            <h2 class="title">especialidades</h2>
            <div class="w33 left box-especialidades html-animate">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>Html5</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                Sed venenatis tortor quam, nec pulvinar elit elementum quis.</p>
            </div><!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades css-animate">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                Sed venenatis tortor quam, nec pulvinar elit elementum quis.</p>
            </div><!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades javascript-animate">
                <h3><i class="fa fa-codepen" aria-hidden="true"></i></h3>
                <h4>Javascript</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                Sed venenatis tortor quam, nec pulvinar elit elementum quis.</p>
            </div><!--w33 left box-especialidades-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <blockquote class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                    Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                    Sed venenatis tortor quam, nec pulvinar elit elementum quis."</blockquote>
                    <cite class="nome-autor">Lorem ipsum</cite>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <blockquote class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                    Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                    Sed venenatis tortor quam, nec pulvinar elit elementum quis."</blockquote>
                    <cite class="nome-autor">Lorem ipsum</cite>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <blockquote class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                    Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                    Sed venenatis tortor quam, nec pulvinar elit elementum quis."</blockquote>
                    <cite class="nome-autor">Lorem ipsum</cite>
                </div><!--depoimento-single-->
            </div><!--w50 left-->

            <div id="servicos" class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                            Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                            Sed venenatis tortor quam, nec pulvinar elit elementum quis.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                            Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                            Sed venenatis tortor quam, nec pulvinar elit elementum quis.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est vitae risus euismod ornare in suscipit tortor.
                            Aliquam id luctus ligula, ut rutrum mauris. Nullam mattis mattis porttitor.
                            Sed venenatis tortor quam, nec pulvinar elit elementum quis.</li>
                        </ul>
                    </div><!--servicos-->
            </div><!--w50 left-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extras-->
<script>
    ScrollReveal().reveal('.html-animate', { delay: 600 });
    ScrollReveal().reveal('.css-animate', { delay: 1000 });
    ScrollReveal().reveal('.javascript-animate', { delay: 1500 });
</script>