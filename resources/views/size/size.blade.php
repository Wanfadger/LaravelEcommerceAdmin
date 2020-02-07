@extends('layouts.app')

@section('title')
    sizes
@endsection

@section('content')
<div class="container">

    <nav>
        <div class="nav-wrapper">
          <div class="col s12">
          <a href="{{route('dashboard.dashboard')}}" class="breadcrumb">Dashboard</a>
            <a href=" {{route('dashboard.sizes')}} " class="breadcrumb">size</a>
          </div>
        </div>
      </nav>

      @if ($errors != null)
      <div class="row">
        <div class="col">
          @foreach ($errors as $error)
              <h4> {{$error}} </h4>
          @endforeach
        </div>
      </div>          
      @endif


    <div class="row">
        <div class="col s6 m6 l6 inline">
            <span>({{$sizes->count()}} sizez) </span>
            <!-- Modal Trigger -->
           <a class="waves-effect waves-light btn modal-trigger" href="#size-modal">Add</a>
 
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
                 
                  @foreach ($sizes as $size)
                    
                  <tr>
                    <td> {{$size->name}} </td>
                    <td> {{$size->description}} </td>
                    <td>
                        <a class="waves-effect waves-light btn-flat modal-trigger" href="#size-modal">Edit</a>
                        <button class="btn btn-flat delete-button">delete</button>
                    </td>
                </tr>
                  @endforeach

                   
                </tbody>
            </table>
        </div>
    </div>
</div>



<div class="row">
  <div class="col">
    <ul class="center-align">
      <li> {{$sizes->links()}} </li>
    </ul>
  </div>
</div>
{{-- add role modal --}}

  <!-- Modal Structure -->
  <div id="size-modal" class="modal">
    <div class="modal-content">
      <h4 class="center">Create Size Detail</h4>
    <form action=" {{route('sizes.save')}} " method="POST" >
      <div class="input-field col s12 l6">
        <input type="text" id="name" name="name" class="validate" placeholder="name">
      </div>

      <div class="input-field col s12">
        <textarea id="textarea1" name="description" class="materialize-textarea" placeholder="size descriptional" ></textarea>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
        <button type="submit" class=" waves-effect waves-green btn-flat">Add</button>
      </div>
      @csrf
    </form>
    </div>
    
  </div>
@endsection

@section('custom-page-js')

@endsection