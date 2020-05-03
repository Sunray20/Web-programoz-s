<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?= $ablakcim['cim'] ?> </title>
    <link rel="stylesheet" href="styles/bootstrap.min.css" >
    <link rel="stylesheet" href="styles/site.css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="logo-container">
                <a href="https://www.kisleptek.hu/nonprofit_szervezetek_onfinanzirozo_mukodese/">
                    <img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li <?= (($oldal == $keres) ? 'class="nav-item active"' : 'class="nav-item"') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>" class="nav-link">
							    <?= $oldal['szoveg'] ?>
                            </a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>   
            </div>
        <div class="text-white">
		    <?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
        </div>
        </nav>

	</header>

    <div id="wrapper">
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>

    <footer class="container">
            <p class="float-right"><a href="#">
                    <svg class="bi bi-chevron-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.646 4.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 5.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z"
                            clip-rule="evenodd" />
                    </svg>
                </a></p>
            <p class="lead mt-5">Kisléptékű Termékelőállítók és Szolgáltatók
                Országos Érdekképviseletének Egyesülete</p>
            <p>Számlaszám: (OTP) 11742049-20343394</p>
            <p>Telefon: <a href="tel:06307688718">Tel: 06 30 768 8718</a> | E-mail: <a
                    href="mailto:kisleptek@gmail.com">kisleptek@gmail.com</a> </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>window.jQuery</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
