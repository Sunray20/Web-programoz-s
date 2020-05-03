<?php
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['uzenet'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=adatbazis', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        
        $sqlInsert = "insert into uzenetek(id, nev, email, uzenet)
                        values(0, :nev, :email, :uzenet)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], ':uzenet' => $_POST['uzenet'])); 
        if($count = $stmt->rowCount()) {
            $newid = $dbh->lastInsertId();
            echo "Üzenet elküldve." ;                   
        }
        else {
            echo "Az üzenet elküldés nem sikerült.";
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
<main role="main">
    <div class="container marketing">
    <hr class="featurette-divider">
    <div class="row featurette d-flex align-items-center bd-highlight mt-5 mb-5">
        <div class="col-md-10 offset-md-1">
            <p>A küldő neve: <?php echo $_POST['nev']?></p>
            <p>Email címe: <?php echo $_POST['email']?></p>
            <p>A küldött üzenet: <?php echo $_POST['uzenet']?></p>
        </div>
    </div>
    <hr class="featurette-divider">
    </div>
</main>
