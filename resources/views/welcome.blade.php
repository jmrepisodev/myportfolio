@extends('layouts.template');

@section('content')

@foreach ($proyectos as $proyecto)
   
   <!-- Portfolio Item 1-->
   <div class="col-md-6 col-lg-4 mb-5">
        <h2 class=" text-center align-middle">{{ $proyecto->nombre }}</h2>
        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white align-middle">
                    <p class="mb-3 text-center">{{ $proyecto->tecnologias }}</p>
                    <i class="fas fa-plus fa-2x"></i> 
                </div>
            </div>
            <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="imagen de proyecto" />
        </div>
    </div>

     <!-- Portfolio Modal 1-->
     <div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="imagen de proyecto" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="fs-3 mb-3 text-danger">{{ $proyecto->tecnologias }}.</p>
                                    <p class="fs-3 mb-3">{{ $proyecto->descripcion }}.</p>
                                    <a href="{{ $proyecto->url }}" class="btn btn-primary" >
                                        <i class="fas fa-eye fa-fw"></i>
                                       Ver proyecto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach

@endsection