@extends('adminlte::page')

@section('template_title')
    Create Recorrido Parada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Selecion de Parada</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recorrido-paradas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('recorrido-parada.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
