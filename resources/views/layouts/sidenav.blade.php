<ul id="slide-out" class="sidenav" isOpen="true">
  <li><div class="user-view">
    <div class="background">
      <img src="#" alt="admin background image">
    </div>
    <a href="#user"><img class="circle" src="#" alt="admin photo"></a>

    @auth
    <a href="#name"><span class="white-text name">{{Auth()->user()->name}}</span></a>
    <a href="#email"><span class="white-text email"> {{Auth()->user()->email}} </span></a>  
    @endauth

  
  </div></li>
  <li><a href=" {{route('dashboard.roles')}} ">Roles</a></li>
  <li><div class="divider"></div></li>
  <li><a href=" {{route('dashboard.categories')}} ">Categories</a></li>
  <li><a href=" {{route('dashboard.subcategories')}} ">Sub-Categories</a></li>
  <li><a class="waves-effect" href=" {{route('dashboard.sizes')}} ">Sizes</a></li>
  <li><a class="waves-effect" href=" {{route('dashboard.colors')}} ">Colors</a></li>
  <li><a class="waves-effect" href=" {{route('dashboard.products')}} ">Products</a></li>
  <li><a class="waves-effect" href=" {{route('dashboard.orders')}} ">Orders</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
