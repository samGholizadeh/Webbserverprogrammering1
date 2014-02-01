
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table>
    <?php if(isset($_GET["fakultet"])){
        $resultat = 1;
        for($i = $_GET["fakultet"]; $i > 0; $i--){
            $resultat *= $i;
        }
        echo "<h2>Resultat</h2><br><h5>".$resultat."</h5>";
    }?>
    <br><form action="fakultet-SamG.php" method="get">
        <input type="text" name="fakultet">
        <input type="submit" value="submit">
    </form>
</table>
</body>
</html>