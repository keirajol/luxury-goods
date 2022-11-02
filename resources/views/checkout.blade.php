<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    @if($balance >= 0.1)
        <h1>Thank you for shopping at Diverse Luxury Goods!</h1>
        {{ "Your balance is: €$balance,-" }}
        @if($balance != null)
            <?php Session::flush('cart'); ?>
        @endif
    @endif

    @if($balance < 0.1)
        <h1>It seems your shopping cart is empty</h1>
    @endif
</body>
</html>
