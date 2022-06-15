@extends('adminlte::page')

@section('template_title')
    Parada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Parada') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paradas as $parada)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $parada->parada }}</td>

                                            <td>
                                                <form action="{{ route('paradas.destroy',$parada->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paradas.show',$parada->id) }}"><i class="fa fa-fw fa-eye"></i> Mirar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paradas.edit',$parada->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $paradas->links() !!}
            </div>
        </div>
    </div>
@endsection
