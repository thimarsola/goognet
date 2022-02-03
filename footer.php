    </main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- content -->
    <div class="footer__content bg-neutral-500">
        <div class="container">
            <!-- row --><!---->
            <div class="footer__content__row">
                <!-- logo -->
                <div class="footer__content__row__logo">
                    <img src="<?= image('logo.svg') ?>" alt="Logo <?= SITE['name']; ?>>" loading="lazy">
                    <p>Nosso trabalho é detectar o problema e redefinir seus objetivos para encontrar a solução ideal para o seu negócio</p>
                </div>
                <!-- end of logo -->

                <!-- sitemap -->
                <article class="footer__content__row__sitemap">
                    <!-- header -->
                    <div class="footer__content__row__sitemap__header">
                        <h2>Mapa do site</h2>
                    </div>
                    <!-- end of header -->

                    <!-- nav -->
                    <div class="footer__content__row__sitemap__nav">
                        <nav class="footer__content__row__sitemap__nav__container">
                            <h3 class="d-none">Menu de Navegação</h3>
                            <?php
                            if(is_home()){
                                wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                            }else {
                                wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                            }
                            ?>
                        </nav>
                    </div>
                    <!-- end of nav -->
                </article>
                <!-- end of sitemap -->

                <!-- copyright -->
                <article class="footer__content__row__copyright">
                    <!-- header -->
                    <div class="footer__content__row__copyright__header">
                        <h2>Avisos legais</h2>
                    </div>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="footer__content__row__copyright__body">
                        <p>Os textos, imagens, animações e vídeos, assim como a sua disposição nos websites da <b>Goognet Solução Digital</b> estão protegidos por direitos de autor, direitos conexos e outros direitos de proteção comercial. O conteúdo deste website não pode ser copiado, difundido, alterado ou tornado acessível a terceiros para finalidades comerciais.</p>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of copyright -->

                <!-- midias -->
                <article class="footer__content__row__midias">
                    <!-- header -->
                    <div class="footer__content__row__midias__header">
                        <h2>Redes Sociais</h2>
                    </div>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="footer__content__row__midias__body">
                        <ul>
                            <!-- instagram -->
                            <li>
                                <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" target="_blank" title="Siga a Goog no Instagram">
                                    <i class="goog-instagram"></i>
                                </a>
                            </li>
                            <!-- end of instagram -->

                            <!-- facebook -->
                            <li>
                                <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" target="_blank" title="Siga a Goog no Facebook">
                                    <i class="goog-facebook"></i>
                                </a>
                            </li>
                            <!-- end of facebook -->

                            <!-- linkedin -->
                            <li>
                                <a rel="nofollow noreferrer noopener" href="<?= CONTACT['linkedin']; ?>" target="_blank" title="Siga a Goog no Linkedin">
                                    <i class="goog-linkedin"></i>
                                </a>
                            </li>
                            <!-- end of linkedin -->
                        </ul>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of midias -->
            </div>
            <!-- end of row -->
        </div>
    </div>
    <!-- end of content -->

    <!-- developer -->
    <div class="footer__developer bg-green-500">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p>Agência especializada em <b>Marketing Digital</b></p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if(!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        }elseif(is_single()){
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        } 
                        else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <a rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                            <i class="goog-w3c"></i>
                            W3C Validator
                        </a>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

<?php if(is_page('Blog') || is_single()): ?>
    <!-- mailchimp -->
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2ffc808ae3e075aedbd20f03e/292728e64c03dd3529cd2d9e1.js");</script>
    <!-- end of mailchimp -->
<?php endif; ?>

</body>

</html>