<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./map_0.css">
    <title>map_0</title>
</head>

<body>
<div id="menu">
    <ul>
        <li><button class="btn">Environnement</button></li>
        <li><button class="btn">Decoration</button></li>
        <li><button class="btn">Maison exterieur</button></li>
        <li><button class="btn">Maison interieur</button></li>
        <li><input type="checkbox" id="tiles_par_tiles" name="tiles_par_tiles" onclick="tiles_par_tiles()"><label for="tiles_par_tiles">Integration tiles par tiles</label></li>
        <li><input type="checkbox" id="tiles_continue" name="tiles_continue" onclick="tiles_continue()"><label for="tiles_continue">Integration continue</label></li>
        <li><button>Effacer tiles</button></li>
        <li><button>Enregistrer le fichier</button></li>
    </ul>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Environnement</h1>
        <?php
            $dir    = './texture_map';
            $files1 = scandir($dir);
            foreach ($files1 as $key => $value) {
        ?>
        <img src="./texture_map/<?php echo $value; ?>" class="texture">
        <?php
            }
        ?>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Decoration</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Maison exterieur</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Maison interieur</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Integration Tiles / Tiles</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>integration continue</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Effacer tiles</p>
    </div>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Enregistrer le fichier</p>
    </div>
</div>
    <div id="tray">
        <?php for ($i=0; $i < 1652; $i++) { ?>
        <div id="<?php echo $i ?>" class="case"></div>
        <?php
        }
        ?>
    </div>
    <script src="./jquery-3.6.1.min.js"></script>
    <script src="./jquery-ui.js"></script>
    <script src="./script.js"></script>
</body>
</html>