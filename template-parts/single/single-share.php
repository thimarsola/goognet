<div class="share">
    <div class="container">

        <!-- row -->
        <div class="share__row">
            <!-- link -->
            <div class="share__row__links">
                <ul>
                    <li>Compartilhe este artigo:</li>
                    <li>
                        <a rel="nofollow noreferrer noopener" href="https://www.facebook.com/sharer.php?u=<?= urlencode(get_the_permalink()); ?>&t=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Facebook"><i class="goog-facebook-link"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow noreferrer noopener" href="https://twitter.com/share?text=<?= urlencode(get_the_title()); ?>&url=<?= urlencode(get_the_permalink()); ?>" target="_blank" title="Compartilhe esse artigo no Twitter"><i class="goog-twitter-link"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow noreferrer noopener" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_the_permalink()); ?>&title=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Linkedin"><i class="goog-linkedin-link"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end of link -->

            <!-- button -->
            <div class="share__row__button">
                <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageCTA"], 'Gostaria de um café?', 'btn btn-green-500', 'Vamos tomar um café e conversar sobre o seu projeto?'); ?>
            </div>
            <!-- end of button -->
        </div>
        <!-- end of row -->

    </div>
</div>