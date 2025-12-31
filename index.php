
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio | Desarrollador</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        :root {
            --bg: #0f172a;
            --surface: #111827;
            --muted: #94a3b8;
            --text: #e2e8f0;
            --accent: #22d3ee;
            --accent-2: #a78bfa;
        }
        body {
            background: radial-gradient(circle at 20% 20%, rgba(34, 211, 238, 0.08), transparent 40%),
                radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
                var(--bg);
            color: var(--text);
            min-height: 100vh;
        }
        .bg-surface {
            background-color: rgba(17, 24, 39, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 1rem;
        }
        .text-muted-custom { color: var(--muted); }
        .pill {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.45rem 0.75rem;
            border-radius: 999px;
            background: rgba(148, 163, 184, 0.15);
            color: var(--text);
            font-size: 0.9rem;
        }
        .progress-bar {
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
        }
        .btn-accent {
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #0b1021;
            border: none;
            font-weight: 700;
            box-shadow: 0 12px 30px rgba(34, 211, 238, 0.25);
        }
        .btn-accent:hover { filter: brightness(1.05); color: #0b1021; }
        footer { color: var(--muted); }
    </style>
</head>
<body>
<?php
    function esc($value): string {
        return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    $profile = [
        'name' => 'William Dominic Tito Monteagudo',
        'role' => 'Futuro Desarrollador Full Stack y estudiante de Ingeniería en Sistemas Computacionales',
        'location' => 'Puno | Perú',
        'summary' => 'Apasionado por crear productos digitales elegantes, mantenibles y centrados en el usuario. Disfruto colaborar con equipos multifuncionales para lanzar funcionalidades de impacto.',
        'email' => '60982802@est.unap.edu.pe',
        'phone' => '+51 974 422 888',
        'availability' => 'Disponible para proyectos freelance y contratación inmediata'
    ];

    $skills = [
        ['label' => 'PHP · CodeIgniter · Laravel', 'value' => 50],
        ['label' => 'JavaScript · Vue · React', 'value' => 10],
        ['label' => 'APIs REST · GraphQL', 'value' => 5],
        ['label' => 'SQL · MySQL · PostgreSQL', 'value' => 60],
        ['label' => 'CI/CD · Docker · AWS', 'value' => 30],
    ];

    $projects = [
        [
            'title' => 'Dashboard de Ventas',
            'description' => 'Panel de analítica con métricas de ventas, embudos y cohortes de clientes.',
            'stack' => ['CodeIgniter 4', 'Bootstrap', 'MySQL', 'Chart.js'],
            'link' => 'http://13.59.209.195/',
            'status' => 'MVP'
        ],
        [
            'title' => 'CRUD Web SQL',
            'description' => 'Práctica de base de datos en el navegador con creación, edición y borrado local.',
            'stack' => ['HTML5', 'Web SQL', 'JavaScript'],
            'link' => '/practicas/base_de_datos/index.php',
            'status' => 'Académico'
        ],
        [
            'title' => 'AJAX Aplicaciones',
            'description' => 'Colección de ejercicios con AJAX nativo, jQuery, JSON y PHP.',
            'stack' => ['AJAX', 'JavaScript', 'PHP'],
            'link' => '/practicas/ajax/',
            'status' => 'Académico'
        ],
        [
            'title' => 'CRUD CodeIgniter 4',
            'description' => 'Práctica CRUD basada en guía de CodeIgniter 4 con migración, modelo y vistas.',
            'stack' => ['PHP', 'CodeIgniter 4', 'MySQL'],
            'link' => '/practicas/guia_crud/crudCode/public',
            'status' => 'Académico'
        ],
        [
            'title' => 'Reportes en PHP',
            'description' => 'Reportes en PDF, Excel, CSV, HTML y Chart.js siguiendo la guía.',
            'stack' => ['PHP', 'FPDF', 'PhpSpreadsheet', 'Chart.js'],
            'link' => '/practicas/Reportes_php/reportes/index.php',
            'status' => 'Académico'
        ],
    ];

    $timeline = [
        ['period' => '2024 — 2025', 'title' => 'Aprendizaje y manejo de Frameworks · innovador en proyectos', 'detail' => 'Diseñé un sistema de gestión de inventarios y ventas con CodeIgniter y bootstrap.'],
        ['period' => '2022 — 2024', 'title' => 'Desarrollador Junior · C++', 'detail' => 'Ingrese a la Universidad Nacional del altiplano a la escuela profesional de ingenieria de sistemas.'],
        ['period' => '2020 — 2022', 'title' => 'Estudiante escolar · Desarrollo en python', 'detail' => 'Comenzo mi interes por el desarrollo de software y la automatización de procesos mediante sistemas y.'],
    ];

    $contacts = [
        ['label' => 'Correo', 'value' => $profile['email']],
        ['label' => 'Teléfono', 'value' => $profile['phone']],
        ['label' => 'Ubicación', 'value' => $profile['location']],
        ['label' => 'Disponibilidad', 'value' => $profile['availability']],
    ];
?>

<header class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgba(17,24,39,0.92); border-bottom: 1px solid rgba(255,255,255,0.06);">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#inicio">
            <span class="badge rounded-pill text-bg-info me-2">●</span>
            Portafolio Profesional
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre mí</a></li>
                <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</header>

<main class="container py-5" id="inicio">
    <section class="row align-items-center g-4 pb-4">
        <div class="col-lg-7">
            <span class="pill mb-3">Disponible · <?php echo esc($profile['availability']); ?></span>
            <h1 class="display-5 fw-bold"><?php echo esc($profile['name']); ?></h1>
            <p class="mb-2 text-muted-custom"><?php echo esc($profile['role']); ?> · <?php echo esc($profile['location']); ?></p>
            <p class="lead text-muted-custom"><?php echo esc($profile['summary']); ?></p>
            <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-accent px-3" href="mailto:<?php echo esc($profile['email']); ?>">Agendar llamada</a>
                <a class="btn btn-outline-light px-3" href="#proyectos">Ver proyectos</a>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="bg-surface p-4 text-center">
                <div class="display-1 text-info mb-3">👩‍💻</div>
                <p class="lead text-muted-custom mb-0">Construyo experiencias digitales enfocadas en negocio y mantenibilidad.</p>
            </div>
        </div>
    </section>

    <section class="row g-4 py-3" id="sobre-mi">
        <div class="col-lg-6">
            <div class="bg-surface p-4 h-100">
                <h2 class="h4 mb-3">Sobre mí</h2>
                <p class="text-muted-custom">Soy estudiante de ingeniería de sistemas en la Universidad Nacional del altiplano, soy un aficionado al desarrollo de nuevos softwares con fines altruistas  y especializo en aplicaciones web de alto rendimiento con énfasis en buenas prácticas, observabilidad y entregas continuas. Trabajo cómodo en entornos remotos y colaborativos.</p>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach (['Clean Code', 'Dev junior', 'Testing', 'Cooperación proactiva', 'Product Thinking'] as $chip): ?>
                        <span class="pill"><?php echo esc($chip); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bg-surface p-4 h-100">
                <h2 class="h4 mb-3">Trayectoria</h2>
                <div class="vstack gap-3">
                    <?php foreach ($timeline as $item): ?>
                        <div class="d-flex gap-3">
                            <div class="text-info fw-bold"><?php echo esc($item['period']); ?></div>
                            <div>
                                <div class="fw-semibold"><?php echo esc($item['title']); ?></div>
                                <div class="text-muted-custom"><?php echo esc($item['detail']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 py-3" id="habilidades">
        <div class="col-lg-6">
            <div class="bg-surface p-4 h-100">
                <h2 class="h4 mb-3">Habilidades clave</h2>
                <div class="vstack gap-3">
                    <?php foreach ($skills as $skill): ?>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span><?php echo esc($skill['label']); ?></span>
                                <span class="text-muted-custom"><?php echo esc($skill['value']); ?>%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo esc($skill['value']); ?>%" aria-valuenow="<?php echo esc($skill['value']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bg-surface p-4 h-100">
                <h2 class="h4 mb-3">Cómo puedo ayudar</h2>
                <ul class="text-muted-custom mb-0">
                    <li>Diseño y desarrollo de MVPs listos para producción.</li>
                    <li>Integración de APIs, pasarelas de pago y automatizaciones.</li>
                    <li>Optimización de rendimiento y refactor de monolitos a servicios.</li>
                    <li>Mentoría técnica y establecimiento de buenas prácticas.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-3" id="proyectos">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h2 class="h4 mb-0">Proyectos destacados</h2>
            <span class="pill">+3 casos seleccionados</span>
        </div>
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="bg-surface p-4 h-100 d-flex flex-column">
                        <span class="pill mb-3">Estado: <?php echo esc($project['status']); ?></span>
                        <h3 class="h5 mb-2"><?php echo esc($project['title']); ?></h3>
                        <p class="text-muted-custom flex-grow-1"><?php echo esc($project['description']); ?></p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <?php foreach ($project['stack'] as $tech): ?>
                                <span class="badge text-bg-secondary"><?php echo esc($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php if (! empty($project['link'])): ?>
                            <a class="btn btn-outline-light w-100" href="<?php echo esc($project['link']); ?>" target="_blank" rel="noreferrer">Ver demo</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="py-4" id="contacto">
        <div class="bg-surface p-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <div>
                    <h2 class="h4 mb-1">Contacto</h2>
                    <p class="text-muted-custom mb-0">¿Tienes un proyecto en mente? Cuéntame tus objetivos y diseñemos la ruta técnica.</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-accent" type="button" data-bs-toggle="modal" data-bs-target="#contactModal">
                        Escríbeme
                    </button>
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#callModal">
                        Agendar llamada
                    </button>
                </div>
            </div>
            <div class="row g-3">
                <?php foreach ($contacts as $contact): ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex flex-column gap-1 bg-dark bg-opacity-25 p-3 rounded">
                            <span class="text-uppercase text-muted-custom small fw-semibold"><?php echo esc($contact['label']); ?></span>
                            <span class="fw-semibold"><?php echo esc($contact['value']); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-surface">
            <div class="modal-header border-secondary">
                <h5 class="modal-title" id="contactModalLabel">Escríbeme</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted-custom mb-3">¿Listo para conversar? Envíame un correo.</p>
                <a class="btn btn-accent w-100" href="mailto:<?php echo esc($profile['email']); ?>">
                    <?php echo esc($profile['email']); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-surface">
            <div class="modal-header border-secondary">
                <h5 class="modal-title" id="callModalLabel">Agendar llamada</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted-custom mb-3">¿Prefieres una llamada? Podemos coordinarla por teléfono.</p>
                <a class="btn btn-outline-light w-100" href="tel:<?php echo esc($profile['phone']); ?>">
                    <?php echo esc($profile['phone']); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 text-center">
    <div class="container">
        <p class="text-muted-custom mb-0">© 2024 <?php echo esc($profile['name']); ?>. Todos los derechos reservados.</p>
</footer>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
