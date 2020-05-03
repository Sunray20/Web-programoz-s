<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=adatbazis', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    
    $utasitas = "Select id, nev, email, uzenet From uzenetek ORDER BY ID DESC";
    $eredm = $dbh->query($utasitas);
    ?>
    <main role="main">
    <div class="container marketing">
        <hr class="featurette-divider">
        <div class="row featurette d-flex align-items-center bd-highlight mt-5 mb-5">
            <div class="col-md-10 offset-md-1">
                <table class="table table-striped">
                    <thead class="bg-dark text-white">
                      <tr>
                        <th scope="col">Név</th>
                        <th scope="col">Email</th>
                        <th scope="col">Üzenet</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($eredm as $sor){ ?>
                            <tr>
                            <td><?=$sor['nev']?></td>
                            <td><?=$sor['email']?></td>
                            <td><?=$sor['uzenet']?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        <hr class="featurette-divider">
        </div>
    </main>
<?php }
catch (PDOException $e) {
    $uzenet = "Hiba: ".$e->getMessage();
}      
?>