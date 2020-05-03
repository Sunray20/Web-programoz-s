<?php
    include('./includes/config.inc.php');
    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
    
?>
<div style="margin: 0 auto; width: 620px;">
    <?php
        arsort($kepek);
        foreach($kepek as $fajl => $datum)
        { ?>
        <div style="display: inline-block;">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>" style="width: 200px;">
            </a>            
            <p>Név:  <?php echo $fajl; ?></p>
        </div>
    <?php } ?>
</div>
