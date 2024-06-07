@extends('layouts.master')


@section('title', 'Arcep BDD|Sites|ListOfSites')

@section('content')


{{$site -> emplacement}}

    <!-- Begin Page Content -->
    <div class="container-fluid"> 

        <!-- Page Heading -->
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            @foreach ($site as $item)
             <h1 class="h3 mb-0 text-gray-800">Détail du site n° {{$item->id}}</h1>
            @endforeach

            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div> 
            @endif
            <a href="{{url('admin/sites')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Voir les sites</a>
        </div> --}}

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            {{-- <div id="content"> --}}
                {{-- <div class="container-fluid"> --}}

                    {{-- <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary text-center">Toutes les informations</h4>
                        </div>  
                    </div> --}}
                    {{-- <p>
                        @foreach ($site as $item)
                        <div class="form-group row">
                            
                                <div class="col-sm-4 mb-4">
                                    <p><b>ID du site:</b> {{$item->id_site}}</p>
                                    <p><b>Longitude:</b> {{$item->longitude}}</p>
                                    <p><b>Latitude:</b> {{$item->latitude}}</p>   
                                </div>
                            

                            <div class="col-sm-4">
                                <p><b>Localite:</b> {{$item->localite}}</p>
                                <p><b>Proprietaire:</b> {{$item->proprietaire}}</p>
                                <p><b>Proprietaire:</b> {{$item->proprietaire}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p><b>Emplacement:</b> {{$item->emplacement}}</p>
                                <p><b>Dossier:</b> {{$item->dossier}}</p>
                                <p><b>Proprietaire:</b> {{$item->proprietaire}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4 mb-4">
                                <p><b>Type:</b> {{$item->type}}</p>
                                <p><b>Objet:</b> {{$item->objet}}</p>
                                <p><b>Statut:</b> {{$item->statut}}</p>   
                            </div>

                            <div class="col-sm-4">
                                <p><b>Emplacement:</b> {{$item->emplacement}}</p>
                                <p><b>Autorisation:</b> {{$item->autorisation}}</p>
                                <p><b>Camouflage:</b> {{$item->camouflage}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p><b>Observation:</b> {{$item->Observation}}</p>
                                <p><b>Description:</b> {{$item->Description}}</p>
                                <p><b>Date d'autorisation:</b> {{$item->date}}</p>
                            </div>
                        </div>
                             
                        @endforeach
                    </p> --}}


                {{-- </div> --}}
            {{-- </div> --}}
        </div>


    </div>
@endsection
