@extends('layouts.app')

@section('title')
  Products
@endsection




@section('content')
<div class="container">

    <nav>
        <div class="nav-wrapper">
          <div class="col s12">
          <a href="{{route('dashboard.dashboard')}}" class="breadcrumb">Dashboard</a>
            <a href=" {{route('dashboard.sizes')}} " class="breadcrumb">Products</a>
          </div>
        </div>
      </nav>

    <div class="row">
        <div class="col s6 m6 l6 inline">
            <span>({{$products->count()}} Products) </span>
            <!-- Modal Trigger -->
           <a class="waves-effect waves-light btn" href=" {{route('products.create')}} ">Add</a>
 
        </div>
        <div class="col s6 m6 l6">
         <input type="text" placeholder="search by name">   
        </div>    
    </div>


    <div class="row">
        <div class="col s8 m8 l8">
            <table class="responsive-table center-align">
                <thead>
                    <tr>
                        <th data-field="name">Name</th>
                        <th data-field="price">Description</th>
                        <th>Qty</th>
                        <th>Colors</th>
                        <th>size</th>
                        <th>sub category</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{$product->name}} </td>
                        <td> {{$product->description}} </td>
                        <td> {{$product->quantity}} </td>
                        <td>
                        @foreach ($product->colors as $color)
                         {{$color->name}} ,     
                        @endforeach
                        </td>

                        <td> @foreach ($product->sizes as $size)
                            {{$size->name}}
                        @endforeach </td>

                        <td> {{$product->subCategory}} </td>
                        
                        <td>
                            <a class="waves-effect waves-light btn-flat modal-trigger" href="#size-modal">Edit</a>
                            <button class="btn btn-flat">delete</button>
                        </td>
                    </tr>    
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('custom-page-js')

@endsection
