@extends('layouts.app')

@section('title', 'Listado de categorías')

@section('body-class','product-page')

@section('content')

    <div class="header header-filter"
         style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Listado de categorías</h2>

                <div class="team">
                    <div class="row">
                        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary btn-round">Nuevo
                            categoría</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th>Image</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="col-md-4">{{ $category->description }}</td>
                                    <td><img src="{{ $category->featured_image_url }}" height="50pc"></td>
                                    <td class="td-actions text-right">

                                        <form action="{{ url("admin/categories/{$category->id}") }}" method="post">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}

                                            <a type="button" rel="tooltip" title="Ver categoría"
                                               class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{  url("admin/categories/{$category->id}/edit") }}" type="button" rel="tooltip" title="Editar categoría"
                                               class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button type="submit" rel="tooltip" title="Eliminar categoría"
                                                    class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('includes.footer')

@endsection