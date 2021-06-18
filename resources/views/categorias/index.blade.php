@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (auth()->user()->is_admin == 0)
                    <div class="card-header">
                        <a href="{{route("home")}}"> {{__('Dashboard')}}</a>
                        <a href="{{route("produtos.index")}}">{{ __('Produtos') }}</a>
                        {{__('Categorias')}}
                        <a href="{{route("marcas.index")}}">{{__('Marcas')}}</a> 
                    </div>
                    <div class="card-body">
                        @foreach ($categorias as $categoria)
                            {{ $categoria->nome}} <br>
                        @endforeach
                    </div>
                @else
                    <div class="card-header">
                        <a href="{{route("home")}}"> {{__('Dashboard')}}</a>
                    </div>

                    <div class="card-body">
                        <div class='panel-heading'>Você não possui permissão para acessar essa página</div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
