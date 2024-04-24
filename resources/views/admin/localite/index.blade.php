@extends('layouts.master')

@section('title', 'Arcep BDD|Localités')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Localités</h1>

            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                
            @endif
            <a href="{{url('admin/add-localite')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ajouter une Localité</a>
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Toutes les Localités</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Arrondisement</th>
                                            <th>Commune</th>
                                            <th>Département</th>
                                            <th>Quartier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($localite as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->arrondissement}}</td>
                                                <td>{{$item->commune}}</td>
                                                <td>{{$item->departement}}</td>
                                                <td>{{$item->quartier}}</td>
                                                <td>
                                                    <a href="{{url('admin/edit-localite/'.$item->id)}}" class="btn btn-success btn-sm ">Modifier</a>
                                                    <a href="{{url('admin/delete-localite/'.$item->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
