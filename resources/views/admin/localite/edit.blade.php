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

        {{-- <div class="col-lg-9 text-center"> --}}
            <div class="card shadow mb-4 mx-auto" style="width:40em;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Modifier une Localité</h6>
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
                            <form action ="{{url('admin/update-localite/'.$localite->id)}}" class="user" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="">Arrondissement</label>
                                    <input type="text" name="arrondissement" value="{{$localite->arrondissement}}" class="form-control form-control-user" id="arrondissement">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Commune</label>
                                    <input type="text" name="commune" value="{{$localite->commune}}" class="form-control form-control-user" id="commune">
                                     
                                </div>
                                <div class="form-group">
                                    <label for="">Département</label>
                                    <input type="text" name="departement" value="{{$localite->departement}}" class="form-control form-control-user" id="departement">
                                </div>
                                <div class="form-group">
                                    <label for="">Quartier</label>
                                    <input type="text" name="quartier" value="{{$localite->quartier}}" class="form-control form-control-user" id="quartier"> 
                                     
                                </div>

                                <a href="">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Enregistrer
                                    </button>
                                </a>

                                <hr>
                               
                            </form>
                            <div class="text-center">
                                <a class="small" href="#">Voulez vous importer des localités?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- </div> --}}
    </div>
@endsection
