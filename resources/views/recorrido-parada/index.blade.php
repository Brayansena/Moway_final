@extends('adminlte::page')

@section('template_title')
    Recorrido Parada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Selecion de Paradas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recorrido-paradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Parada</th>
										<th>Nombre de la Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recorridoParadas as $recorridoParada)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $recorridoParada->parada->parada }}</td>
											<td>{{ $recorridoParada->recorrido->nombre_ruta }}</td>

                                            <td>
                                                <form action="{{ route('recorrido-paradas.destroy',$recorridoParada->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recorrido-paradas.show',$recorridoParada->id) }}"><i class="fa fa-fw fa-eye"></i> Mirar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recorrido-paradas.edit',$recorridoParada->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recorridoParadas->links() !!}
            </div>
        </div>
    </div>
@endsection
