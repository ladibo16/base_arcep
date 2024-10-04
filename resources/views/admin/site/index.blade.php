@extends('layouts.master')

@section('title', 'Arcep BDD|Sites|ListOfSites')

@section('content')

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('admin/delete-site') }}" method="POST">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer une Site</h5>

                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="site_delete_id" id="site_id">
                        <h5>Etes vous sure de vouloir supprimer cette ce site</h5>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sites</h1>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <a href="{{ url('admin/add-site') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ajouter
                un site</a>
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Toutes les sites</h6>
                        </div>
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
                                            <th>Action</th>
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
                                                <td>
                                                    <a href="{{ url('admin/detail_sites', $item->id) }}"
                                                        class="btn btn-outline-info btn-sm">Détails</a>
                                                    <a href="{{ url('admin/edit-site/' . $item->id) }}"
                                                        class="btn btn-outline-success btn-sm ">Modifier</a>
                                                    {{-- <a href="{{url('admin/site/'.$item->id.'/edit')}}" class="btn btn-outline-success btn-sm ">Modifier</a> --}}

                                                    <a href="{{ url('delete_site', $item->id) }}" class="btn btn-danger"
                                                        onclick="confirmation(event)">Supprimer</a>

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

@section('scripts')

    <script>

        function confirmation(ev) {

        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');  

        // console.log(urlToRedirect); 

        swal({

            title: "Are you sure to Delete this post",

            text: "You will not be able to revert this!",

            icon: "warning",

            buttons: true,

            dangerMode: true,

        })

        .then((willCancel) => {

            if (willCancel) {





                

                window.location.href = urlToRedirect;

                

            }  





        });



        

    }

    </script>

@endsection
