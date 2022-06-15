@extends('adminlte::page')

@section('template_title')
    Recorrido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recorrido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recorridos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th>Nombre de la Ruta</th>
										<th>Numero de Ruta</th>
										<th>Enlace del Recorrido</th>
										<th>Imagen Recorrido</th>
										<th>Nombre del Recorrido</th>
										<th>Nombre de la empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recorridos as $recorrido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $recorrido->nombre_ruta }}</td>
											<td>{{ $recorrido->numero_ruta }}</td>
											<td>{{ $recorrido->url_recorrido }}</td>
											<td><img src="{{ asset('storage').'/'.$recorrido->imagen_recorrido }}" alt="" width="100"></td>
											<td>{{ $recorrido->horario->nombre_horario }}</td>
											<td>{{ $recorrido->empresa->nombre_empresa }}</td>

                                            <td>
                                                <form action="{{ route('recorridos.destroy',$recorrido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recorridos.show',$recorrido->id) }}"><i class="fa fa-fw fa-eye"></i> Mirar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recorridos.edit',$recorrido->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $recorridos->links() !!}
            </div>
        </div>
    </div>
@endsection
