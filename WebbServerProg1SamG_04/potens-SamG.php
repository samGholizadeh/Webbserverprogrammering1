<!DOCTYPE html>
    <html>
        <head>
            <style>
                table tr td{
                    border: 1px solid black;
                }
            </style>
        </head>
        <body>
            <table>
              <?php for($i = 1; $i < 101; $i++){?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo pow($i, 2); ?></td>
                    </tr>
              <?php } ?>
            </table>
        </body>
    </html>