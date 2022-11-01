<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./map_0.css">
    <title>map_0</title>
</head>

<body>
<?php
    $dir    = './texture_map';
    $files1 = scandir($dir);
    foreach ($files1 as $key => $value) {
?>
<img src="./texture_map/<?php echo $value; ?>" class="draggable">
<?php
    }
?>
    <div id="tray">
        <?php for ($i=0; $i < 1652; $i++) { ?>
        <div id="<?php echo $i ?>" class="case"></div>
        <?php
        }
        ?>
    </div>
    <script src="./jquery-3.6.1.min.js"></script>
    <!-- <script src="./jquery-ui.js"></script> -->
    <script src="./script.js"></script>
</body>
</html>