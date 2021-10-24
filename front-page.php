<?php get_header(); ?>
<main>
  <div class="hero">
    <div class="hero__wrapper">
        <div class="hero__image-overlay"></div>
            <div class="hero__image">
                <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/topo.jpg" alt="Topo" width="1920" height="1074">
            </div>
            <div class="hero__contentPart">
                <div class="hero-wrapper">
                    <div class="hero-wrapper__heading">
                        <h1>VENDA COM OS EXCELENCIA E ELEGÂNCIA</h1>
                        <p>Desenvolva sua loja virtual com a WF.</p>
                        <div class="hero-wrapper__button"><a href="http://localhost/wordpress/loja/" class="">VISUALIZAR MAIS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section clas="categorias">
            <div class="categorias">
                <div class="categorias__blocos">
                    <div class="categorias__bloco">
                        <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/shirts.png" alt="Camisas" width="100px" height="100px">
                        <h3>CAMISETAS</h3>
                    </div>
                    <div class="categorias__bloco">
                        <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/pants.png" alt="Calças" width="100px" height="100px">
                        <h3>CALÇAS</h3>
                    </div>
                    <div class="categorias__bloco">
                        <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/shoes.png" alt="Sapatos" width="100px" height="100px">
                        <h3>SAPATOS</h3>
                    </div>
                    <div class="categorias__bloco">
                        <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/jackets.png" alt="Jaquetas & Blusas" width="100px" height="100px">
                        <h3>JAQUETAS</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="detalha"> 
            <h4>DESTAQUES DA SEMANA</h4><br>
            <div class="detalha__chama">
                <div class="detalha__linha"></div>
                <div class="detalha__dot"></div>
                <div class="detalha__linha"></div>
        </div>
                <div class="detalha__lista">
                    <?php echo do_shortcode('[best_selling_products  limit="3"]');?>
                </div>
        </section>
        <section class="attention">
            <div class="attention">
                <div class="attention__img">
                    <img src="http://localhost/wordpress/wp-content/themes/wfstore/src/images/Foto-Outubro-Rosa.png" alt="Imagem Ilustrativa" width="400px" height="709px">
                </div>
                <div class="attention__detalhes">
                    <p class="attention__chama">Descubra coisas novas!</p>
                    <h1>LOOK DO FINAL DE SEMANA</h1>
                    <p class="attention__descreve">Saia para qualquer lugar arrasando com este look!</p>
                    <p>P: <span>R$ 35,99</span></p>
                    <p>M: <span>R$ 49,99</span></p>
                    <p>G: <span>R$ 60,00</span></p>
                </div>
            </div>
        </section>
        <section class="informa">
            <div class="informa">
                <p>POR QUE A <span>WF</span>?</p>
                <h1>Porque nós somos apaixonados por <span>detalhes</span>, <span>novidades</span> e <span>sucesso</span>! </h1>
            </div>
        </section>
        <section>
            <div class="showcase">
                <div class="container">
                <h1>Exiba seus produtos para todo o mundo ver! </h1>
               <a href="http://localhost/wordpress/loja/">VER MAIS</a>
            </div>
            </div>
        </section>
        <section class="detalha"> 
            <h4>DESTAQUES DA SEMANA</h4><br>
            <div class="detalha__chama">
                <div class="detalha__linha"></div>
                <div class="detalha__dot"></div>
                <div class="detalha__linha"></div>
        </div>
                <div class="detalha__lista">
                    <?php echo do_shortcode('[best_selling_products]');?>
                </div>
        </section>
</main>
<?php get_footer(); ?>