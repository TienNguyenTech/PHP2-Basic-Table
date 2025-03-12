<?php
function createTable($row, $column): string {
    $table = "<table>";
    for ($i = 1; $i <= $row; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= $column; $j++)
            $table .= "<td>Row" . $i . " Col" . $j . "</td>";
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP createTable()</title>
    <style>
        table, td {
            border: black 1px solid;
        }
    </style>
</head>
<body>

<?= createTable(3, 5); ?>

</body>
</html>
