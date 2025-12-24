<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Web SQL</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <main class="container py-5">
        <header class="mb-4">
            <h1 class="h3 mb-2">CRUD Web SQL</h1>
            <p class="text-secondary mb-0">Practica de base de datos en el navegador usando Web SQL.</p>
        </header>

        <div id="websql-warning" class="alert alert-warning d-none">
            Tu navegador no soporta Web SQL. Prueba con Chrome o Safari.
        </div>

        <div class="card bg-secondary bg-opacity-25 border-0">
            <div class="card-body">
                <form id="websql-form" class="row g-3">
                    <div class="col-12 col-md-2">
                        <input type="number" id="websql-id" class="form-control" placeholder="Id" />
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="websql-nombres" class="form-control" placeholder="Nombres" />
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="websql-apellidos" class="form-control" placeholder="Apellidos" />
                    </div>
                    <div class="col-12 d-flex flex-wrap gap-2">
                        <button type="button" id="websql-create" class="btn btn-info text-dark">Crear</button>
                        <button type="button" id="websql-edit" class="btn btn-outline-light">Editar</button>
                        <button type="button" id="websql-clear" class="btn btn-outline-danger">Borrar todo</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-dark table-striped align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody id="websql-tbody"></tbody>
            </table>
        </div>
    </main>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/practicas/base_de_datos/websql-crud.js"></script>
</body>
</html>
