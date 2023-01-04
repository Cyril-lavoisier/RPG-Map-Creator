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
            <li><button class="btn">Collision</button></li>
        </ul>
    </div>

    <div id="game_modal" class="modal">
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
    <div id="game_modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Decoration</h1>
            <?php
            $dir    = './deco_map';
            $files1 = scandir($dir);
            foreach ($files1 as $key => $value) {
            ?>
                <img src="./deco_map/<?php echo $value; ?>" class="deco">
            <?php
            }
            ?>
        </div>
    </div>
    <div id="game_modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Maison exterieur</p>
        </div>
    </div>
    <div id="game_modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Maison interieur</p>
        </div>
    </div>
    <div id="game_modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Collision</p>
            <ul>
                <li><input type="checkbox" id="ch" name="ch" onclick="collision(ch)"><label for="ch">Collision Haut</label></li>
                <li><input type="checkbox" id="cb" name="cb" onclick="collision(cb)"><label for="cb">Collision Bas</label></li>
                <li><input type="checkbox" id="cd" name="cd" onclick="collision(cd)"><label for="cd">Collision Droit</label></li>
                <li><input type="checkbox" id="cg" name="cg" onclick="collision(cg)"><label for="cg">Collision Gauche</label></li>
                <li><input type="checkbox" id="chd" name="chd" onclick="collision(chd)"><label for="chd">Collision Haut Droit</label></li>
                <li><input type="checkbox" id="cbd" name="cbd" onclick="collision(cbd)"><label for="cbd">Collision Bas Droit</label></li>
                <li><input type="checkbox" id="chg" name="chg" onclick="collision(chg)"><label for="chg">Collision Haut Gauche</label></li>
                <li><input type="checkbox" id="cbg" name="cbg" onclick="collision(cbg)"><label for="cbg">Collision Bas Gauche</label></li>
            </ul>
        </div>
    </div>
    <div id="tray">
        <?php for ($i = 0; $i < 1652; $i++) { ?>
            <div id="<?php echo $i ?>" class="case"></div>
        <?php
        }
        ?>
    </div><br>
    <div id="dimensional_tray">
        <?php for ($i = 0; $i < 1652; $i++) { ?>
            <div class="dimensional_case_<?php echo $i ?>">'X',</div>
        <?php
        }
        ?>
    </div><br>
    <!-- <div id="generated_css"></div> -->
    <div id="tray_event"></div><br>
    <script src="./jquery-3.6.1.min.js"></script>
    <script src="./jquery-ui.js"></script>
    <script src="./script.js"></script>
</body>
</html>