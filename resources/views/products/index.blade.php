<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>

    <!-- Hiển thị danh mục -->
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>

    <table class="table" align="center">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr scope="row">
                    <div class="book">
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                        </td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="btn btn-info"><a href="{{ url('/product/' . $product->id) }}">Show</a></td>
                        <td class="btn btn-warning">Edit</td>
                        <td class="btn btn-danger" style="color: black;">Delete</td>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
