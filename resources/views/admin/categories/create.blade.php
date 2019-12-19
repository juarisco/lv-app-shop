@extends('layouts.app')

@section('title', 'Crear categoría')

@section('body-class','product-page')

@section('content')

    <div class="header header-filter"
         style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <h2 class="title text-center">Registrar nueva categoría</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('admin/categories') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre de la categoría</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label class="control-label">Imágen de la categoría</label>
                            <input type="file"  name="image">
                        </div>

                    </div>

                    <textarea name="description" class="form-control" rows="5"
                              placeholder="Descripción de la categoría">{{ old('description') }}</textarea>

                    <button class="btn btn-primary">Registrar categoría</button>
                    <a href="{{ url('admin/categories') }}" class="btn btn-default">Cancelar</a>
                </form>
            </div>

        </div>

    </div>

    @include('includes.footer')

@endsection