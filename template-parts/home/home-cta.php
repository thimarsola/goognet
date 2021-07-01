<section class="cta bg-green-500">
    <div class="container">
        <!-- row -->
        <div class="cta__row">
            <!-- header -->
            <header class="cta__row__header">
                <h2>Vamos falar sobre o seu projeto?</h2>
            </header>
            <!-- end of header -->

            <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["messageCTA"], 'Quero falar do meu projeto', 'btn btn-neutral-500', 'Vamos conversar sobre o seu projeto?'); ?>
        </div>
        <!-- end of row -->
    </div>
</section>