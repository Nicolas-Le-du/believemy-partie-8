<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon site PHP</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                <tr>
            </thead>
            
            <tbody>
                
                <?php

                    for($x = 1; $x <= 10; $x++) {

                        echo "<tr><th>$x</th>";
                    
                        for($y = 1; $y <= 10; $y++) {

                            echo '<td>'.$x * $y.'</td>';

                        }

                        echo '</tr>';

                    }

                ?>

            </tbody>

        </table>
    </body>
</html>