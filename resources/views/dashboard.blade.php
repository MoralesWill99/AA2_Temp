@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Nuestros Servicios</h2>

    <!-- 🎠 Carrusel Bootstrap 5 -->
    <div id="dashCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 shadow">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Herrería">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Herrería</h5>
                    <p>Estructuras metálicas, rejas, puertas y más.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Carpintería">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carpintería</h5>
                    <p>Muebles a medida, puertas, cocinas y restauración.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Desarrollo Web">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Desarrollo Web</h5>
                    <p>Sitios modernos, tiendas en línea y más.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#dashCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#dashCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- 📦 Cards Bootstrap -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Herrería">
                <div class="card-body">
                    <h5 class="card-title">Puerta de Herrería</h5>
                    <p class="card-text">Diseño robusto y elegante para tu hogar.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Carpintería">
                <div class="card-body">
                    <h5 class="card-title">Cocina Integral</h5>
                    <p class="card-text">Madera de alta calidad, diseño personalizado.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="Web">
                <div class="card-body">
                    <h5 class="card-title">Tienda en Línea</h5>
                    <p class="card-text">Desarrollo web moderno y responsivo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection