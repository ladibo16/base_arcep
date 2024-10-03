@extends('layouts.master')


@section('title', 'Arcep BDD|Sites|ListOfSites')

@section('content')




    <!-- Begin Page Content -->
    <div class="container-fluid"> 

         <!-- Page Heading -->
      

        <!-- Content Wrapper -->
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>ID du site</th>
                            <th>Localite</th>
                            <th>Statut</th>
                            <th>Propriétaire</th>
                            <th>Emplacement</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($site as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->id_site }}</td>
                                <td>{{ $item->localite }}</td>
                                <td>{{ $item->statut }}</td>
                                <td>{{ $item->proprietaire }}</td>
                                <td>{{ $item->emplacement }}</td>
                               
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
