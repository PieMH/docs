<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- <ol>
        <?php
            foreach($array as $name) {
            echo "<li>$name</li>";
        } ?>
    
        <?php foreach($array as $name) : ?>
        <li><?= $name;?></li>
        <?php endforeach; ?>
    </ol>
    -->
    <ul> 
        <?php foreach($associativearray as $field => $datum) : ?>
            <li>
                <strong><?= $field . ' =>'; ?></strong>
                <?= $datum; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>