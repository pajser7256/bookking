<style>
    
    .blueColor{
        color:#16697a;
        font-weight:bold;
    }

</style>
<div class="container text-center">

        <br><br>

        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Nalog</h1>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-4 col-sm-4">
                <table>
                    <tr>
                        <td class="blueColor">Ime:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $ime; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Prezime:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $prezime; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Imejl:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $imejl; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Šifra:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $sifra; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Adresa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $adresa; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Grad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $grad; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Poštanski broj:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $postBroj; ?></td>
                    </tr>
                    <tr>
                        <td class="blueColor">Država:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center"><?php echo $drzava; ?></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>
                            <form action="<?php echo site_url("$controller/nalog_izmena"); ?>" method="POST">
                                <button class="btn btn-primarly">Izmeni nalog</button>
                            </form>
                        </td>
                        <td>
                            <!--Janko dodaj ovde koju akciju zelis-->
                            <form action="<?php echo site_url("$controller/?????"); ?>" method="POST">
                                <button class="btn btn-primarly">Zahtev za verifikaciju</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
</div>