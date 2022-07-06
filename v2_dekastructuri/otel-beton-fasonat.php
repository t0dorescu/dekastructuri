
<?php
    $send = false;
    $message_user = ''; 

    if (isset($_POST['submit'])) {

    //    var_dump($_FILES["file"]["tmp_name"]);
    //    die;

        $file = "/" . $_FILES["file"]["tmp_name"];
        // $mailto = 'deka.comenzi@gmail.com';
        $mailto = 'todorescu.consulting@gmail.com';
        $subject = 'Otel beton fasonat - PDF';
        $message = $_POST['contact'];

        $content = file_get_contents($file);
        $content = chunk_split(base64_encode($content));

        // a random hash will be necessary to send mixed content
        $separator = md5(time());

        // carriage return type (RFC)
        $eol = "\r\n";

        // main header (multipart mandatory)
        $headers = "From: name <". $mailto .">" . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
        $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
        $headers .= "This is a MIME encoded message." . $eol;

        // message
        $body = "--" . $separator . $eol;
        $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $message . $eol;

        // attachment
        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $_FILES["file"]["name"] . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content . $eol;
        $body .= "--" . $separator . "--";

        //SEND Mail
        if (mail($mailto, $subject, $body, $headers)) {
            $message_user = "Sa trimis email cu pdf-ul dvs. <br><br> In curand va vom contacta. <br><br>"; // or use booleans here
            $message_user .= "<a href=\"otel-beton-fasonat.php\" style=\"text-decoration: underline;\">Incarca alt fisier. Click aici</a>"; // or use booleans here
        } else {
            $message_user = "Din pacate sa produs o eroare in sistem! <br><br> Va rugam sa ne contactati <a href=\"./contact.php\">aici</a>";
            print_r( error_get_last() );
        }

        $send = true;
    }

?>

<?php $page = 'otel-beton-fasonat' ?>
<?php include 'php/header.php' ?>

<div class="container" style="padding: 50px 0;">
    <div class="row" style="padding: 0 25px;">
        <section class="span12">
            <div class="row">
                <h1>Otel beton fasonat</h1>
                <p style="font-size: .8rem">
                    Prelucram otel beton din colaci si bobine cu diametre de 8,10,12 si 16 mm precum si din bara dreapta pana la diametrul de 35 mm.
                    <br><br>Capacitatea de productie este de 300 tone/luna/schimb (in prezent activitatea se desfasoara pe un singur schimb).
                    <br><br>Livram cu autovehicul cu macara.
                    <br> <br>
                </p>
                <p><strong>Adresa:</strong> Jud. Alba, Drambar, str Europei nr. 15</p>
                <br>

                <?php if ( !$send ) : ?>
                    <form 
                        action="otel-beton-fasonat.php"
                        method="post"
                        enctype="multipart/form-data"
                        style="
                            display: flex;
                            flex-direction: column;
                        "
                    >
                        <textarea 
                            name="contact"
                            placeholder="Nume, nr de telefon, adresa email + specificatii"
                            required
                            class="mobile-90"
                            style="
                                width: 200px;
                                padding: 10px 15px;
                                min-height: 100px;
                                border: 0;
                                margin-bottom: 15px;
                            "
                        ></textarea>
                        <input 
                            type="file" 
                            name="file"
                            accept="all"
                            required
                            class="mobile-90"
                            style="
                                width: 200px;
                                border: 2px solid #00AEEF;
                                padding: 10px 15px;
                                background: white;
                                cursor: pointer;
                            "
                        />
                        <button 
                            type="submit" 
                            name="submit"
                            id="submit"
                            class="mobile-100"
                            style="
                                width: 235px;
                                padding: 10px 15px;
                                background: #00AEEF;
                                border: 1px solid white;
                                color: white;
                                font-weight: bold;
                                margin: 10px 0;
                                cursor: pointer;
                            "
                        >Incarca extras de fier (pdf)</button>
                    </form>
                <?php else : ?>
                    <h3 style="
                            text-transform: inherit;
                            color: #00AEEF;
                            margin-top: 10px;
                            background: white;
                            padding: 20px;
                            width: 250px;
                            font-size: 1rem;
                            line-height: 1.25rem;
                            font-family: Arial;
                    "><?= $message_user ?></h3>
                <?php endif ?>
            </div>
        </section>
    </div>
</div>

<?php include 'php/footer.php' ?>