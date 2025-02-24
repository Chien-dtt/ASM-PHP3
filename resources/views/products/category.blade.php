<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - Sản phẩm</title>
</head>
<body>
    <h1>Sản phẩm trong danh mục: {{ $category->name }}</h1>

    <!-- Hiển thị sản phẩm của danh mục -->
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>Giá: {{ number_format($product->price, 0, ',', '.') }} VND</p>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="150">
            <p>{{ $product->description }}</p>
        </div>
    @endforeach

    <!-- Link quay lại trang danh mục -->
    <a href="{{ url('/') }}">Trở lại trang chủ</a>
</body>
</html>
