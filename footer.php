</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- logo -->
    <div class="footer__logo<?= is_page() ? ' bg-blue-500' : '' ?>">
        <div class="container">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo <?= SITE['name']; ?>">
        </div>
    </div>
    <!-- end of logo -->

    <!-- copyright -->
    <div class="footer__copyright<?= is_home() ? ' bg-blue-500' : '' ?>">
        <div class="container">
            <p>&COPY; <?= date('Y') . " " . SITE['name']; ?> | Todos os direitos reservados</p>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-orange-500">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row">
                <!-- goognet -->
                <div class="footer__developer__row__goognet">
                    <p>Desenvolvido por
                        <b>
                            <a rel="nofollow noreferrer noopener" href="<?= DEV["url"]; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV["name"]; ?></a>
                        </b>
                    </p>
                </div>
                <!-- end of goognet -->

                <!-- validator -->
                <?php if(!is_404()): ?>
                <div class="footer__developer__row__validator">
					<?php
					$protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

					if (is_home()) {
						$urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
					} else {
						$urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
					}
					?>

                    <a rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                        <i class="pet-w3c"></i>
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

</body>

</html>