<?php $page = 'contact' ?>
<?php include 'php/header.php' ?>

<?php
    $send = false;
    if (isset($_POST['submit'])) {

        $subject = t('Notificare') . ' - dekastructuri.ro';
        $mesaj = $_POST['contact']."<br /><hr /><br />".$_POST['mesaj'];

        $mail = mail('dekastructuri@gmail.com', $subject, $mesaj);
        $send = true;
    }

?>

    <div class="container">
        <div class="row">

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>

            <div style="float: left; width: 250px; padding-right: 50px; border-right: 1px solid #ccc;">
                <h1><?= t('Contact') ?></h1>
                <div class="clearfix">&nbsp;</div>
                <h4><strong><?= t('Telefon') ?>:</strong></h4>
                <p><strong>+40732 131589</strong></p>
                <div class="clearfix">&nbsp;</div>
                <h4><strong><?= t('Mail') ?>:</strong></h4>
                <p><strong>
                    dekastructuri@gmail.com
                    </strong>
                </p>
            </div>
            <div style="float: left; padding-left: 40px;">
                <?php if ($send) : ?>
                    <div class="alert alert-success">
                        <?= t('contact_text_1') ?>
                    </div>
                <?php else : ?>
                    <form action="contact.php" method="post">
                        <div>
                            <label><?= t('Contact') ?></label>
                            <input type="text" name="contact" placeholder="<?= t('contact_text_2') ?>"
                                   value="<?= (isset($_POST['contact']) ? $_POST['contact'] : '') ?>" />
                        </div>
                        <div>
                            <label><?= t('Mesaj') ?></label>
                            <textarea name="mesaj" placeholder="<?= t('contact_text_3') ?>">
                                <?= (isset($_POST['mesaj']) ? $_POST['mesaj'] : '') ?>
                            </textarea>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="submit" value="<?= t('Trimitere') ?>" />
                        </div>
                    </form>
                <?php endif ?>
            </div>

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>


        </div>
    </div>

<?php include 'php/footer.php' ?>