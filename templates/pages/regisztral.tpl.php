<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($uzenet)) { ?>

        <main role="main">
            <div class="container marketing">
            <hr class="featurette-divider">
            <div class="row featurette d-flex align-items-center bd-highlight mt-5 mb-5">
                <div class="col-md-10 offset-md-1">
                    <h1><?= $uzenet ?></h1>
                    <?php if($ujra) { ?>
                        <a href="pelda.html">Próbálja újra!</a>
                    <?php } ?>
                </div>
            </div>
            </div>
            <hr class="featurette-divider">
        </main>
            
        <?php } ?>
    </body>  
</html>