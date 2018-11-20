
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            body{
                font-family: Arial;
            }
            table{
                border-collapse: collapse;

            }
            table, td{
                border: 1px solid #ddd;
            }
            tr:nth-child(even){
                background-color: #b9ead1;
            }
            th{
                padding-top: 12px;
                padding-bottom: 12px;
                padding-left:6px;
                padding-right: 28px;
                text-align: left;
            }
            td{
                padding: 6px;
            }
        </style>
    </head>
    <body>
        <table >
            <tr>
                <th>Valores asignados</th>
                <th>Mostrando variables</th> 
            </tr>
            <tr>
                <?php
                $v = 125;
                $type = gettype($v);
                print "<td> \$v=$v </td>";
                print "<td>Variable $type, valor -$v-</td>";
                ?>
            </tr>
            <tr>
                <?php
                $v = 0274;
                $type = gettype($v);
                $b = decoct($v);
                print "<td> \$v=$b </td>";
                print "<td>Variable $type, valor decimal -$v- y en octal -$b-</td>";
                ?>
            </tr>
            <tr>
                <?php
                $v = 0xABC12;
                $type = gettype($v);
                $b = dechex($v);
                print "<td> \$v=$b </td>";
                print "<td>Variable $type, valor decimal -$v- y en hexadecimal -$b-</td>";
                ?>
            </tr>
            <tr>
                <?php
                $v = 0b1100;
                $type = gettype($v);
                $b = decbin($v);
                print "<td> \$v=$b </td>";
                print "<td>Variable $type, valor decimal -$v- y en binario -$b-</td>";
                ?>
            </tr>
            <tr>
                <?php
                $v = 1.2343223000332;
                $type = gettype($v);
                print "<td> \$v=$v </td>";
                printf("<td>Variable $type, valor -$v- y en notación cientifica %.6e</td>", $v);
                ?>
            </tr>
            <tr>
                <?php
                $v = 1.234000e+1;
                $type = gettype($v);
                print "<td> \$v=$v </td>";
                printf("<td>Variable $type, valor -$v- y en notación cientifica %.6e</td>", $v);
                ?>
            </tr>
            <tr>
                <?php
                $v = null;
                $type = gettype($v);
                $b = strval($v);
                print "<td> \$v=$v </td>";
                print"<td>Variable $type, es -$v- y en string es -$b-</td>";
                ?>
            </tr>
        </table>
    </body>
</html>
