<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    @foreach($product as $product)
        <h1>{{ $product->brand->name . ' - ' . $product->name }}</h1><br />
        <img class="prod-img" src="{{ $product->image }}" /><h3>{{ '€' . $product->price }}</h3><br />
        <a href="{{url('cart?prod_id=' . $id)}}">
            Add to cart
        </a>
        <section>{{ $product->description }}</section>
    @endforeach
    
    </body>
</html>
