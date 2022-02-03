<section class="hero">
    <!-- image -->
    <div class="hero__image">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
    </div>
    <!-- end of image -->

    <div class="container">
        <!-- content -->
        <div class="hero__content bg-white-500">
            <!-- categories -->
            <div class="hero__content__categories">
                <?php
                the_category();
                ?>
            </div>
            <!-- end of categories -->

            <!-- header -->
            <div class="hero__content__header">
                <p><?= get_the_title(); ?></p>
            </div>
            <!-- end of header -->

            <!-- author -->
            <div class="hero__content__author">
                <ul>
                    <li>
                    <span>
                        <img src="<?= image('icon.svg'); ?>" alt="A melhor Agência de Marketing do Grande ABC!" loading="lazy">
                    </span>
                        <p>Goognet</p>
                    </li>
                    <li>
                        &bull;
                    </li>
                    <li>
                        <time datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time>
                    </li>
                </ul>
            </div>
            <!-- end of author -->
        </div>
        <!-- end of content -->

        <!-- body -->
        <div class="hero__body">
            <?php
                the_content();
            ?>
        </div>
        <!-- end of body -->
    </div>
</section>