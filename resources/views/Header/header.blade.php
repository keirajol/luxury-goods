<nav class="header">
    @include('Stylesheets.stylesheets')
    <a href="{{url('')}}"><img src="images/logotransparent.png" width="100" height="100" /></a>
    <a href="{{url('')}}">Home</a>
    <div class="dropdown">
        <p>Assortment</p>
        <div class="dropdown-content">
            @foreach($categories as $category)
                <a class="" href="{{url('category?cat_id=' . $category->id)}}">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
    <a href="{{url('contact')}}">Contact</a>
    <a href="{{url('about')}}">About Us</a>
    <a href="{{url('cart')}}"><img src="images/shoppingcart.png" width="25" height="25"/></a>
</nav>
