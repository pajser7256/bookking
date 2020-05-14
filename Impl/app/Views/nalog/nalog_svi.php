<div class="container text-center">
            
            
<br><br>

<div class="row">
    <div class="offset-sm-2 col-sm-8">
        <br>
        <h3>Svi važeći nalozi</h3>
        <div class="myPager">
        <?php 
            $myPath = '/bookking/Impl/public//'.uri_string();
            $pager->setPath($myPath, 'nalozi');
        ?>
            <?= $pager->links('nalozi'); ?>
        </div>

        <?php if(count($nalozi) > 0) : ?>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Korisnik</th>
                    <th>Pregled naloga</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($nalozi as $nalog) {
                    $imgsrcProfil = base_url('/assets/images/zahtev_profil.png');
                    $imgProfil = array(
                        'src' => $imgsrcProfil,
                        'alt' => 'Profil',
                        'style' => 'height: 50px'
                    );

                    echo "<tr><td style='display: table-cell;vertical-align: middle;'>{$nalog->Imejl}</td>";
                    echo "<td>".anchor("$controller/nalog_pregled/{$nalog->IdK}", img($imgProfil))."</td></tr>";  
                }
                ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="alert text-center alert-info">
                        Nema vazećih korisničkih naloga!
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

</div>






<br>
<br>
<br>
<br>
            
</div>

