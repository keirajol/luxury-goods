<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <div class="category-box">
        @foreach($products as $products)
            <a href="{{url('product?prod_id=' . $products->id)}}" class="product_details">
                <img class="product_img" src="{{url($products->image)}}" /><br />
                <div class="specs">
                    {{ $products->name }}<br />
                    €{{ $products->price }}
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
