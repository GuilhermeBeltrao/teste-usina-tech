@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (auth()->user()->is_admin == 0)
                    <div class="card-header">
                        <a href="{{route("home")}}"> {{__('Dashboard')}}</a>
                        {{ __('Produtos') }}
                        <a href="{{route("categorias.index")}}">{{ __('Categorias')}}</a>
                        <a href="{{route("marcas.index")}}">{{__('Marcas')}}</a> 
                    </div>
                    <div class="card-body">
                        @foreach ($produtos as $produto)
                            
                            {{ $produto->nome }}
                            {{App\Models\Categoria::where('id', $produto->categoria_id)->get('nome')}}
                            {{App\Models\Marca::where('id', $produto->marca_id)->get('nome')}} <br>
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
