<?php
function createTable($row, $column): string {
    $table = '<table class="table table-striped"><tbody>';
    for ($i = 1; $i <= $row; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= $column; $j++) {
            $table .= "<td>Row" . $i . " Col" . $j . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</tbody></table>";
    return $table;
}

// Process parameters from $_GET
$rows = (!empty($_GET['rows'])) ? $_GET['rows'] : 3;
$cols = (!empty($_GET['cols'])) ? $_GET['cols'] : 5;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Table with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<!-- Row Column Modal -->
<div class="modal fade" id="rowColModal" tabindex="-1" aria-labelledby="rowColModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="rowColModalLabel">Change PHP-generated Table</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="row-col-settings">
                    <div class="mb-3">
                        <label for="row-number" class="col-form-label">Number of Rows:</label>
                        <input type="number" min="1" step="1" class="form-control" id="row-number" name="rows" value="<?= $rows ?>">
                    </div>
                    <div class="mb-3">
                        <label for="col-number" class="col-form-label">Number of columns:</label>
                        <input type="number" min="1" step="1" class="form-control" id="col-number" name="cols" value="<?= $cols ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" form="row-col-settings" class="btn btn-primary" value="Save Settings"/>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <span class="navbar-brand mb-0 h1">PHP/HTML Table</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <div class="ms-auto">
                    <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#rowColModal">Settings</button>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="pt-5">
    <div class="container">
        <?= createTable($rows, $cols); ?>
    </div>
</main>
<footer class="py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        PHP with Bootstrap in action
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>