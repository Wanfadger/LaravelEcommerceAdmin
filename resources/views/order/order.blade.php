@extends('layouts.app')

@section('title')
    Orders
@endsection


@section('content')

<div class="row">
    <div class="col s6 m6 l6 inline">
        <span>(2 orders) </span>
        <!-- Modal Trigger -->
       <a class="waves-effect waves-light btn modal-trigger" href=" {{route('orders.create')}} ">Add</a>

    </div>
    <div class="col s6 m6 l6">
     <input type="text" placeholder="search by name">   
    </div>    
</div>


<div class="row">
    <div class="col s8 m8 l8 offset-m2 offset-l2">
        <table class="bordered">
            <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>.87</td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>.76</td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>    
@endsection


@section('custom-app-js')
    
@endsection