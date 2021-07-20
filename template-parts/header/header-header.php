<header class="header">
    <div class="container">
        <!--navbar-->
        <div class="header__navbar">
            <!-- brand -->
            <?php
                if(is_page() || is_category() || is_single()):
            ?>
                <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                    <img src="<?= image('logo-primario.svg') ?>" alt="Logo <?= SITE['name']; ?>>" loading="lazy">
                </a>
            <?php
                else:
            ?>
                <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                    <img src="<?= image('logo.svg') ?>" alt="Logo <?= SITE['name']; ?>>" loading="lazy">
                </a>
            <?php endif; ?>
            <!-- end of brand -->


            <div class="header__navbar__section">
                <!-- toggle -->
                <div class="header__navbar__section__toggle<?= is_page('Blog') || is_category() || is_single() ? ' header__navbar__section__toggle__blog' : '' ?>">
                    <p>
                        <span></span>
                        <img src="<?= image('vetor-menu.svg'); ?>" alt="Vetor - <?= SITE['name']; ?>" loading="lazy">
                    </p>
                </div>
                <!-- end of toggle -->

                <!-- container -->
                <div class="header__navbar__section__container">
                    <!-- nav -->
                    <nav class="header__navbar__section__container__nav">
                        <h2 class="d-none">Menu de Navegação</h2>
                        <?php
                        if(is_home()){
                            wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                        }else {
                            wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                        }
                        ?>
                    </nav>
                    <!-- end of nav -->
                </div>
                <!-- end of container -->

            </div>
        </div>
        <!--end of navbar-->
    </div>
</header>