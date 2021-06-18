@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    {{__('Dashboard')}}</a>
                    @if (auth()->user()->is_admin == 0)
                        <a href="{{route("produtos.index")}}">{{ __('Produtos') }}</a>
                        <a href="{{route("categorias.index")}}">{{ __('Categorias')}}</a>
                        <a href="{{route("marcas.index")}}">{{__('Marcas')}}</a> 
                    @endif

                </div>
                
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
