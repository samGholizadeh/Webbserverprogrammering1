<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <h2>Beräkna statlig skatt.</h2>
            <form action="skatt-SamG.php" method="GET">
                <input type="text" name="inkomst">
                <input type="submit" value="Beräkna">
            </form><br>
        <?php if(isset($_GET["inkomst"])){
                $inkomst = $_GET["inkomst"];
                $skatt = 0;
                if($inkomst <= 8900){
                    $skatt = 0;
                } else if($inkomst > 8900 && $inkomst < 198700){
                    $skatt = 100;
                } else {
                    $skatt = 100 + (($inkomst - 198700) * 0.2);
                }
                echo "<h4>Skatt</h4>".$skatt;
            }?>
        </body>
    </html>