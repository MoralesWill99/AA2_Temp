@extends('layouts.app')

@section('title', 'Servicios Web')

@section('content')

<!-- 🖼️ Hero principal -->
<div class="position-relative text-white text-center py-5 mb-5"
     style="background: url('https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Servicios Web</h1>
        <p class="lead">Desarrollo web moderno, SEO y soluciones digitales para tu negocio.</p>
    </div>
</div>

<!-- 📦 Servicios como cards individuales -->
<div class="container mb-5">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Desarrollo Web">
                <div class="card-body">
                    <h5 class="card-title">Desarrollo Web</h5>
                    <p class="card-text">Sitios modernos, responsivos y escalables para cualquier necesidad.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Landing pages</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Tiendas en línea</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Dashboards personalizados</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Posicionamiento SEO">
                <div class="card-body">
                    <h5 class="card-title">Posicionamiento SEO</h5>
                    <p class="card-text">Aumentamos tu visibilidad en Google con estrategias probadas.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Optimización de contenido</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Palabras clave estratégicas</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Google Analytics & Search Console</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Mantenimiento Web">
                <div class="card-body">
                    <h5 class="card-title">Mantenimiento Web</h5>
                    <p class="card-text">Mantenemos tu sitio actualizado, seguro y funcionando 24/7.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Actualizaciones de seguridad</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Respaldo automático</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Soporte técnico mensual</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 🧰 Iconos de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.105/font/bootstrap-icons.css">
@endsection