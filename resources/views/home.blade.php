@extends('layouts.app')

@section('title', 'Inicio - Taller Multiservicios')
@section('content')

<!-- Hero Section -->
<div class="text-center py-5 bg-light rounded mb-5">
    <h1 class="display-5 fw-bold">Bienvenido a Multiservicios Morales</h1>
    <p class="lead">Especialistas en herrería, carpintería y desarrollo web.</p>
    <a href="#servicios" class="btn btn-primary btn-lg">Ver Servicios</a>
</div>

<!-- Servicios Cards -->
<section id="servicios" class="mb-5">
    <h2 class="text-center mb-4">Nuestros Servicios</h2>
    <div class="row g-4">

        <!-- Card 1: Herrería -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Herrería">
                <div class="card-body">
                    <h5 class="card-title">Herrería</h5>
                    <p class="card-text">Estructuras metálicas, rejas, puertas y trabajos personalizados en hierro forjado.</p>
                    <a href="/herreria" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Carpintería -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Carpintería">
                <div class="card-body">
                    <h5 class="card-title">Carpintería</h5>
                    <p class="card-text">Muebles a medida, puertas, cocinas y restauración de madera con acabados de calidad.</p>
                    <a href="/carpinteria" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Servicios Web -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Desarrollo Web">
                <div class="card-body">
                    <h5 class="card-title">Desarrollo Web</h5>
                    <p class="card-text">Sitios web modernos, aplicaciones personalizadas y soluciones digitales para tu negocio.</p>
                    <a href="/servicios-web" class="btn btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Llamada a la acción -->
<div class="text-center py-4 bg-dark text-white rounded">
    <h4>¿Tienes un proyecto en mente?</h4>
    <p>Contáctanos y te ayudamos a hacerlo realidad.</p>
    <a href="mailto:contacto@taller.com" class="btn btn-light">Contactar</a>
</div>

@endsection