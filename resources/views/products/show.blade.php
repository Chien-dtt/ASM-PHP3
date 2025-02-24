<!DOCTYPE html>
<html lang="vi">
<head>
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="300">
    <p>{{ $product->description }}</p>
    <p>Giá: {{ number_format($product->price, 0, ',', '.') }} VND</p>
</body>
</html>