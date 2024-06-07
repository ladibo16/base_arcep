@extends('layouts.master')

@section('title', 'Arcep BDD|Localités')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Localités</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Voir les localités</a>
        </div>

        
            <div class="card shadow mb-4 mx-auto" style="width:40em;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Importer des Localités</h6>
                </div>

                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="p-2">
                            <div class="text-center">
                                <h1 class="h4 text-gray-700 mb-4">Bienvenue!</h1>
                            </div>
                            {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->any() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            </div>   
                            @endif --}}
                            <form action ="{{url('admin/import-localite')}}" class="user" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Importer un fichier excel (csv) </label>
                                    <input type="file" name="file" class="form-control form-control-user" id="file">
                                    
                                </div>
                                
                                <a href="">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Importer
                                    </button>
                                </a>

                                <hr>
                               
                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ url('admin/localite')}}">Voir les localités</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
    </div>
@endsection
