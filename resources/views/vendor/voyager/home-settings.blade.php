@extends('voyager::master')

@section('page_title', 'Configurações da Home Page')

@section('content')
<div class="page-content container-fluid">
    <form action="{{ route('voyager.home-settings.update') }}" method="POST">
        @csrf
        <div class="panel panel-bordered">
            <div class="panel-heading">
                <h3 class="panel-title">Configurações da Home Page</h3>
            </div>
            <div class="panel-body">
                @foreach ($settings as $setting)
                    <div class="form-group">
                        <label for="{{ $setting->key }}">{{ $setting->display_name }}</label>
                        <input type="text" class="form-control" name="{{ $setting->key }}" value="{{ $setting->value }}">
                    </div>
                @endforeach
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Salvar Configurações</button>
            </div>
        </div>
    </form>
</div>
@endsection
