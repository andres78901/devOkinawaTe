<?php
echo $this->resources->css();
echo $this->resources->js();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Okinawa-Te</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php echo $menu; ?>
            </div><br>
            <div class="row">
                <?php echo $gallery; ?>
            </div><br>
            <div class="row">
                <?php echo $history ?>
            </div><br>
        </div>
    </body>
</html>
