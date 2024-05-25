@extends('layouts.master')

@section('title', 'Arcep BDD|Sites|NewSite')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sites</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Voir les sites</a>
        </div>

        {{-- <div class="col-lg-9 text-center"> --}}
            <div class="card shadow mb-4 mx-auto" style="width:45em;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter un site</h6>
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
                            <form action ="{{url('admin/add-site')}}" class="user" method="POST">
                                @csrf

                            

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="">Longitude</label>
                                        <input type="text" class="form-control form-control-user" id="longitude"
                                            name="longitude">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Latitude</label>
                                        <input type="text" class="form-control form-control-user" id="latitude"
                                            name="latitude">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Localite</label>
                                        <input type="text" class="form-control form-control-user" id="localite"
                                            name="localite">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Identifiant du site</label>
                                        <input type="text" class="form-control form-control-user" id="id_site"
                                            name="id_site">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">N° Dossier</label>
                                        <input type="text" class="form-control form-control-user" id="dossier"
                                            name="dossier">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Propriétaire</label>
                                        <input type="text" class="form-control form-control-user" id="proprietaire"
                                            name="proprietaire">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Emplacement</label>
                                        <input type="text" class="form-control form-control-user" id="emplacement"
                                            name="emplacement">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="">Type</label>
                                        <input type="text" class="form-control form-control-user" id="autorisation"
                                            name="type">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Objet</label>
                                        <input type="text" class="form-control form-control-user" id="camouflage"
                                            name="objet">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Statut</label>
                                        <input type="text" class="form-control form-control-user" id="camouflage"
                                            name="statut">
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Référence d'autorisation</label>
                                        <input type="text" class="form-control form-control-user" id="autorisation"
                                            name="autorisation">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Camouflage</label>
                                        <input type="text" class="form-control form-control-user" id="camouflage"
                                            name="camouflage">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Observation</label>
                                        <textarea name="observation" id="" cols="30" rows="6" class="form-control rounded"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30" rows="6" class="form-control rounded"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Date d'autorisation</label>
                                    <input type="date" name="date" class="form-control form-control-user" id="date">
                                    
                                </div>

                                <a href="">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Enregistrer
                                    </button>
                                </a>

                                <hr>
                               
                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ url('admin/import-site')}}">Voulez vous importer des Sites?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- </div> --}}
    </div>
@endsection
