@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col s6 m6 l6 inline">
            <span>({{$categories->count()}} categories) </span>
            <!-- Modal Trigger -->
           <a class="waves-effect waves-light btn modal-trigger" href="#category-modal">Add</a>
 
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
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td> {{$category->name}} </td>
                        <td> {{$category->description}} </td>
                        <td>
                            <a class="waves-effect waves-light btn-flat modal-trigger" href="#category-modal">Edit</a>
                            <button class="btn btn-flat delete-button">delete</button>
                        </td>
                    </tr>
                    @endforeach

                   
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- add role modal --}}

  <!-- Modal Structure -->
  <div id="category-modal" class="modal">
    <div class="modal-content">
      <h4 class="center">Create Category Detail</h4>
    <form action=" {{route('categories.save')}} " method="POST">
      <div class="input-field col s12 l6">
        <input type="text" id="name" name="name" class="validate" placeholder="name">
      </div>
      <div class="input-field col s12">
        <textarea id="textarea1" name="description" class="materialize-textarea" placeholder="category descriptional" ></textarea>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
        <button type="submit" class=" waves-effect waves-green btn-flat">Add</>
      </div>
      @csrf
    </form>
    </div>
    
  </div>
@endsection


@section('custom-page-js')

@endsection