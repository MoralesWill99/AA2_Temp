@extends('layouts.app')

@section('title', 'Herrería')

@section('content')

<!-- 🖼️ Hero principal -->
<div class="position-relative text-white text-center py-5 mb-5"
     style="background: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Servicios de Herrería</h1>
        <p class="lead">Forja artesanal, soldadura profesional y estructuras metálicas a medida.</p>
    </div>
</div>

<!-- 📦 Servicios como cards individuales -->
<div class="container mb-5">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://cdff0dc95e.clvaw-cdnwnd.com/b5beb4ea3abda39f08c721351dfd8206/200000209-7c9467c948/la-forja-artesanal.jpg?ph=cdff0dc95e" class="card-img-top" alt="Forja Artesanal">
                <div class="card-body">
                    <h5 class="card-title">Forja Artesanal</h5>
                    <p class="card-text">Diseños únicos en hierro forjado: rejas, portones, barandillas y más.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Rejas y verjas</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Puertas y portones</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Barandillas</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://media.istockphoto.com/id/1333681481/es/foto/soldadura-de-acero-o-soldador-industrial-en-la-f%C3%A1brica-el-da%C3%B1o-suceder%C3%A1-a-la-salud-de-la.jpg?s=612x612&w=0&k=20&c=xeU8xG4D1fjgexEL4pZz4EpQkDIw8rah4z_kH6oFeis=" class="card-img-top" alt="Soldadura Profesional">
                <div class="card-body">
                    <h5 class="card-title">Soldadura Profesional</h5>
                    <p class="card-text">Soldadura MIG y TIG para reparaciones y estructuras industriales.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Reparaciones</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Estructuras metálicas</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Trabajos industriales</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://grupoadpi.gt/wp-content/uploads/2023/11/Que-es-estructura-metalica.jpg" class="card-img-top" alt="Estructuras Metálicas">
                <div class="card-body">
                    <h5 class="card-title">Estructuras Metálicas</h5>
                    <p class="card-text">Proyectos robustos y duraderos para obra civil y arquitectura.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Vigas y columnas</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Escaleras metálicas</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Cobertizos y pérgolas</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 🧰 Iconos de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.105/font/bootstrap-icons.css">
@endsection