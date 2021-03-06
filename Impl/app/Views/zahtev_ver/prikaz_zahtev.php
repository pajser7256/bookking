<html>
    <body>
        <div class="container text-center">
            
            <form action="<?php echo site_url("$controller/razmotri_zahtev"); ?>" method="POST">
                <br><br><br>

                <div class="justify-content-center">
                    <?php 
                        $korisnikModel = new \App\Models\ModelKorisnik();
                        $podneo = $korisnikModel->find($zahtev->Podneo);
                        helper('html');
                        $imgsrc = base_url('/assets/images/zahtev_dokaz.png');
                        $img = array(
                            'src' => $imgsrc,
                            'alt' => 'File',
                            'style' => 'height: 150px'
                        );
                        echo "<h3>Podnosilac zahteva za verifikaciju:<br>{$podneo->Imejl}</h3><br>";
                        echo "<h3>Verifikacioni fajl sa dokazom:</h3><br>";
                        echo "<h2>".anchor_popup("$controller/prikaz_zahtev_fajl", img($img))."</h2>";
                        
                    ?>
                    <br><br>
                    <?php if($zahtev->Odobrio == null):?>
                        
                        <button type="submit" name="zahtev_dugme" value="odobri" class='btn btn-primarly'>&nbsp;&nbsp;&nbsp;Odobri zahtev&nbsp;&nbsp;&nbsp;</button>
                        &nbsp;&nbsp;
                        <button type="submit" name="zahtev_dugme" value="odbij" class='btn btn-primarly'>&nbsp;&nbsp;&nbsp;Odbij zahtev&nbsp;&nbsp;&nbsp;</button>
                
                    <?php else: ?>
                        <h3>Stanje zahteva: <?= $zahtev->Stanje ?></h3>
                        <h3>Zahtev pregledao: <?= $korisnikModel->find($zahtev->Odobrio)->Imejl ?></h3>
                    <?php endif; ?>
                </div>

            </form>
        </div>
    </body>
</html>