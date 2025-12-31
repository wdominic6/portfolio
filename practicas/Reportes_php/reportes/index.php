<?php
$reports = [
    ['label' => 'Reporte PDF (FPDF)', 'path' => 'pdf/reporte_pdf.php'],
    ['label' => 'Reporte Excel (PhpSpreadsheet)', 'path' => 'excel/reporte_excel.php'],
    ['label' => 'Reporte CSV (PhpSpreadsheet)', 'path' => 'csv/reporte_csv.php'],
    ['label' => 'Reporte HTML (Impresion)', 'path' => 'html/index.html'],
    ['label' => 'Reporte Chart.js', 'path' => 'chartjs/index.html'],
];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reportes PHP</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        body { background: #0f172a; color: #e2e8f0; }
        a { color: #22d3ee; }
        .card { background: #111827; border: 1px solid rgba(255,255,255,0.08); }
    </style>
</head>
<body>
<div class="container py-5">
    <h1 class="mb-4">Practica de reportes en PHP</h1>
    <div class="row g-3">
        <?php foreach ($reports as $report): ?>
            <div class="col-md-6">
                <div class="card p-3">
                    <h5 class="mb-2"><?php echo htmlspecialchars($report['label'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <a href="<?php echo htmlspecialchars($report['path'], ENT_QUOTES, 'UTF-8'); ?>">Abrir reporte</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
