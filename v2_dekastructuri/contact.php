<?php $page = 'contact' ?>
<?php include 'php/header.php' ?>

<?php
    $send = false;
    if (isset($_POST['submit'])) {

        $subject = t('Notificare') . ' - dekastructuri.ro';
        $mesaj = $_POST['contact']."\n\n".$_POST['mesaj'];
        // $headers = "From: name <". $_POST['contact'] .">";
        
        // dekastructuri@gmail.com
        $mail = mail('todorescu.consulting@gmail.com', $subject, $mesaj);
        $send = true;
    }

?>

    <div class="container">
        <div class="row">

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>

            <div style="float: left; width: 250px; padding-right: 50px;">
                <h1><?= t('Contact') ?></h1>
                <div class="clearfix">&nbsp;</div>

                <h4><strong>Tehnic:</strong></h4>
                <p><strong>Daniel Butas</strong></p>
                <p><a href="tel:0736375258">0736 375 258</a></p>
                
                <p>&nbsp;</p>
                <h4><strong>Economic:</strong></h4>
                <p><strong>Alexandra Neamtu</strong></p>
                <p><a href="tel:0722685526">0722 685 526</a></p>
                
                <p style="margin-top: 10px;"><strong>Madalina Arboreanu</strong></p>
                <p><a href="tel:0729136773">0729 136 773</a></p>
                
                <p>&nbsp;</p>
                <h4><strong>Otel beton fasonat:</strong></h4>
                <p><strong>Cristina Galambfalvi</strong></p>
                <p><a href="tel:0747277174">0747 277 174</a></p>
                
                <p>&nbsp;</p>
                <h4><strong><?= t('Mail') ?>:</strong></h4>
                <p><a href="mailto:dekastructuri@gmail.com">dekastructuri@gmail.com</a></strong></p>
                <p><a href="mailto:deka.comenzi@gmail.com">deka.comenzi@gmail.com</a></strong></p>
                <p>&nbsp;</p>
                
            </div>
            <div style="float: left;">
                <?php if ($send) : ?>
                    <div class="alert alert-success">
                        <?= t('contact_text_1') ?>
                    </div>
                <?php else : ?>
                    <form action="contact.php" method="post">
                        <div>
                            <label>Adresa de email</label>
                            <input type="email" name="contact" placeholder="Introduceti adresa de email..."
                                   value="<?= (isset($_POST['contact']) ? $_POST['contact'] : '') ?>" required />
                        </div>
                        <div>
                            <label><?= t('Mesaj') ?></label>
                            <textarea name="mesaj" placeholder="<?= t('contact_text_3') ?>"></textarea>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="submit" value="<?= t('Trimitere') ?>" />
                        </div>
                    </form>
                    <br />
                <?php endif ?> 

                    <div class="flex-container">
                        <div style="margin-right: 20px; padding-right: 20px; margin-bottom: 20px;">
                            <h4><strong>Adresa Sediu:</strong></h4>
                            <p>Jud. Alba, Alba Iulia, str. Henri Coanda nr 1 - spatiu de birouri 2</p>
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d545.2408964430152!2d23.578115834750218!3d46.07595100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474ea8734dc49a61%3A0xf36fceffd8acbabd!2sStrada%20Henri%20Coand%C4%83%201%2C%20Alba%20Iulia%20510001!5e0!3m2!1sen!2sro!4v1654599406256!5m2!1sen!2sro" 
                                style="
                                    border: 3px solid #00AEEF;
                                    width: 235px;
                                    height: 200px;
                                    margin-top: 5px;
                                    border-radius: 3px;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                        <div>
                            <h4><strong>Adresa Fabrica:</strong></h4>
                            <p>Jud. Alba, Drambar, str Europei nr. 15</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2767.7053199523907!2d23.612366915642458!3d46.07691667911306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0c1281b308a08e5!2zNDbCsDA0JzM2LjkiTiAyM8KwMzYnNTIuNCJF!5e0!3m2!1sen!2sro!4v1654599723000!5m2!1sen!2sro"
                                style="
                                    border: 2px solid #00AEEF;
                                    width: 250px;
                                    height: 200px;
                                    margin-top: 15px;
                                    border-radius: 3px;" 
                                allowfullscreen="" 
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>

                    <style>
                        .flex-container {
                            display: flex;
                            flex-direction: row;
                        }
                        @media (max-width: 800px) {
                            .flex-container {
                                flex-direction: column;
                            }
                        }
                    </style>
            </div>

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>


        </div>
    </div>

<?php include 'php/footer.php' ?>