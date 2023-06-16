@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Selamat Datang Di Halaman Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Roles
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\Role::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('role.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Users
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\User::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('user.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Categories
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\Category::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('category.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Products
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\Product::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('product.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Brands
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\Brand::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('brand.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Sliders
                            <div class="small text-white">
                                <i class="fas fa-angle-right"></i>
                                {{\App\Models\Slider::count() }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('slider.index') }}">View Details</a>                            
                        </div>
                    </div>
                </div>

            </div>           
            
        </div>
    </main>
@endsection