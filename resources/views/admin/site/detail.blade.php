@extends('layouts.master')

@section('title', 'Arcep BDD|Sites|ListOfSites')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">&nbsp; &nbsp; Page de détail</h1>
            
        </div>
        <div class="container-fluid">
            <h2 class="h2 mb-0 text-gray-800">Site n° {{$site->id}}</h2>
            <br>

            
            
            <div class="row">

                <div class="col-lg-6">

                    <!-- Default Card Example -->
                    <div class="card mb-4">
                        <div class="card-header">
                            ID du site
                        </div>
                        <div class="card-body">
                            {{$site->id_site}}
                        </div>
                    </div>

                    <!-- Basic Card Example -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Longitude & Latitude
                        </div>
                        <div class="card-body">
                           <li><b>Longitude:</b> {{$site->longitude}}</li>
                           <li><b>Latitude:</b> {{$site->latitude}}</li>
                           
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Emplacement
                        </div>
                        <div class="card-body">
                            {{$site->emplacement}}
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Localité
                        </div>
                        <div class="card-body">
                            {{$site->localite}}
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Observation
                        </div>
                        <div class="card-body">
                            {{$site->observation}}
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Date d'autorisation
                        </div>
                        <div class="card-body">
                            {{$site->date}}
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <!-- Dropdown Card Example -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Propriétaire
                        </div>
                        <div class="card-body">
                           {{$site->proprietaire}}
                           
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Type, Objet & Statut
                        </div>
                        <div class="card-body">
                           <li><b>Type:</b> {{$site->type}}</li>
                           <li><b>Objet:</b> {{$site->objet}}</li>
                           <li><b>Statut:</b> {{$site->statut}}</li>
                           
                        </div>
                    </div>

                    
                    <div class="card mb-4">
                        <div class="card-header">
                            Autorisation
                        </div>
                        <div class="card-body">
                           {{$site->autorisation}}
                           
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Camouflage
                        </div>
                        <div class="card-body">
                           {{$site->camouflage}}
                           
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Description
                        </div>
                        <div class="card-body">
                            {{$site->description}}
                        </div>
                    </div>

                </div>

            </div>
            
            

            
            
            

        </div>

        {{$site->id_site}}

        {{$site->emplacement}}
    </div>    
</div>
@endsection