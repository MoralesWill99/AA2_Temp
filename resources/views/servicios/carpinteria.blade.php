@extends('layouts.app')

@section('title', 'Carpintería')

@section('content')

<!-- 🖼️ Hero principal -->
<div class="position-relative text-white text-center py-5 mb-5"
     style="background: url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Servicios de Carpintería</h1>
        <p class="lead">Muebles a medida, acabados de madera y restauración profesional.</p>
    </div>
</div>

<!-- 📦 Servicios como cards individuales -->
<div class="container mb-5">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Muebles a Medida">
                <div class="card-body">
                    <h5 class="card-title">Muebles a Medida</h5>
                    <p class="card-text">Cocinas, closets, estanterías y mobiliario personalizado.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Cocinas integrales</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Closets</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Estanterías</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1560185007-c5ca9d2c014d?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Acabados de Madera">
                <div class="card-body">
                    <h5 class="card-title">Acabados de Madera</h5>
                    <p class="card-text">Lijado, pulido, pintura y barniz para todo tipo de madera.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Lijado y pulido</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Pintura y barniz</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Restauración</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Restauración de Muebles">
                <div class="card-body">
                    <h5 class="card-title">Restauración de Muebles</h5>
                    <p class="card-text">Devolvemos vida a tus piezas antiguas con técnicas tradicionales.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success me-2"></i>Reparación de estructuras</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Recambio de chapa y tornillos</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Acabado a tono original</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 🧰 Iconos de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.105/font/bootstrap-icons.css">
@endsection