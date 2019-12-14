@extends('layouts.app')

@section('title', 'App Shop | Dashboard')

@section('body-class','product-page')

@section('content')

    <div class="header header-filter"
         style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <h2 class="title text-center">Dashboard</h2>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                    <li class="active">
                        <a href="#dashboard" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de compras
                        </a>
                    </li>
                    <li>
                        <a href="#tasks" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos realizados
                        </a>
                    </li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="col-md-2 text-center">Nombre</th>
                        <th class="text-right">Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th class="text-center">SubTotal</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->cart->details as $detail)
                        <tr>
                            <td class="text-center">
                                <img src="{{ $detail->product->featured_image_url }}" height="50" t="">
                            </td>
                            <td>
                                <a href="{{ url("products/{$detail->product->id}") }}" target="_blank">{{ $detail->product->name }}</a>
                            </td>
                            <td class="text-right">${{ $detail->product->price }}</td>
                            <td class="text-center">{{ $detail->quantity }}</td>
                            <td class="text-center">${{ $detail->quantity * $detail->product->price}}</td>
                            <td class="td-actions text-right">

                                <form action="{{ url("admin/products/{$detail->product->id}") }}" method="post">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}

                                    <a href="{{ url("products/{$detail->product->id}") }}" target="_blank" rel="tooltip" title="Ver producto"
                                       class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </a>

                                    <button type="submit" rel="tooltip" title="Eliminar producto"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>


        </div>

    </div>

    @include('includes.footer')

@endsection