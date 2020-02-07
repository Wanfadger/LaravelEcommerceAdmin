@extends('layouts.app')

@section('title')
  Products
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col m10 s8 l10  offset-m1 offset-l1">
      <div class="card">
        <div class="card-title center"><h4>Create Product Detail</h4></div>
        <div class="card-content">
          <form action=" {{route('products.save')}} " method="post">
            <div class="input-field">
              <input type="text" placeholder="name" name="name">
            </div>

            <div class="input-field">
              <input type="number" min="1" placeholder="quantity" name="quantity">
            </div>

            <div class="input-field">
              <input type="text" placeholder="description" name="description">
            </div>

            <div class="divider"></div>

            <div class="input-field">
              <select name="category" id="category">
                <option value="" disabled selected>Select product category</option>
                 @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
                @endforeach 
              </select>
            </div>

            <div class="input-field">
              <select name="subCategory" id="subcategory">
                <option value="" disabled selected>Select product sub-category</option> 
                {{-- @foreach ($subCategories as $subCategory)
                <option value=" {{$subCategory->id}} "> {{$subCategory->name}} </option>
                @endforeach--}}
              </select>
            </div>

            <div class="divider"></div>

            <div class="input-field">
              <select name="size" id="size">
                <option value="" disabled selected>Select product size</option>
                @foreach ($sizes as $size)
                <option value=" {{$size->id}} "> {{$size->name}} </option>
                @endforeach
              </select>
            </div>

            <div class="input-field">
              <select name="colors[]" id="color" multiple>
                <option value="" disabled selected>Select product color</option>
                @foreach ($colors as $color)
                <option value=" {{$color->id}} "> {{$color->name}} </option>
                @endforeach
              </select>
            </div>

            @csrf
            <div class="card-footer">
              <button type="submit" class="btn waves-effect">Add</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>

@endsection



@section('custom-page-js')
 <script>
     
$(document).ready(function () {


    var jsonArray  = [
        {
            "id" : "1" ,
            "name" : "item1",
            "description" : "item 1 description"
        },
        {
            "id" : "2" ,
            "name" : "item2",
            "description" : "item 2 description"
        },
        {
            "id":"3" ,
            "name" : "item3",
            "description":"item 3 description"
        },{
            "id":"4" ,
            "name" : "item4",
            "description":"item 4 description"
        },
        {
            "id": "5" ,
            "name" : "item5",
            "description":"item 5 description"
        }

    ];
  var id=1;
    axios.get(`category/subcategories/${id.trim()}`, get)
                .then(res => {
                    console.log(res)
                }).catch(err => {
                console.log(err)
            })

    $.each(jsonArray , (key , value)=>{
      var option = new Option(value.name  , value.id)
      $('#subcategory').append(option) 
    }) 
    $('select').formSelect(); 
   

});

 </script>
@endsection
