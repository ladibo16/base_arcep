@extends('layouts.master')

@section('title', 'Arcep BDD|Localités')

@section('content')




{{-- @foreach ($localite as $item)

    <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirmation de Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cet équipement ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form action="{{ route('localite.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endforeach --}}
    
    

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/delete-localite')}}" method="POST">
            @csrf
            
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Supprimer une localité</h5>
            
            <button type="button" class="btn-close" aria-label="Close"></button>  
            </div>
            <div class="modal-body">
                <input type="hidden" name="localite_delete_id" id="localite_id">
                <h5>Etes vous sure de vouloir supprimer cette localite</h5>
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
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
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
                                                    {{-- <a href="{{url('admin/delete-localite/'.$item->id)}}" class="btn btn-danger btn-sm">Supprimer</a> --}}
                                                    <button type="button" class="btn btn-danger btn-sm deleteLocaliteBtn" value="{{$item->id}}">supprimer</button>

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
        
        $(document).ready(function (){
            $('.deleteLocaliteBtn').click(function(e){
                e.preventDefault();

                var localite_id = $(this).val();

                $('#localite_id').val(localite_id);

                $('#deleteModal').modal('show');
            });
        });
    </script>
    
@endsection