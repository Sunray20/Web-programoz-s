<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <main role="main">
            <div class="container marketing">
                <hr class="featurette-divider">
                <div class="row featurette d-flex align-items-center bd-highlight mt-5 mb-5">
                    <div class="col-md-10 offset-md-1">
                    <h1>Bejelentkezett:</h1>
                    Azonosító: <strong><?= $row['id'] ?></strong><br><br>
                    Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
                    <?php } else { ?>
                        <h1>A bejelentkezés nem sikerült!</h1>
                        <a href="?oldal=belepes" >Próbálja újra!</a>
                    <?php } ?>
                <?php } ?>
                <?php if(isset($errormessage)) { ?>
                    <h2><?= $errormessage ?></h2>
                    </div>
                </div>
                <hr class="featurette-divider">
            </div>
        </main>
        <?php } ?>