<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product list</h1>
    <table>
        <tr>
            <th>name</th>
            <th>amount</th>
            
        </tr>
        @foreach($products as $product)
        <tr>

            <td>{{ $product->name }}</td>
        </tr>

        @endforeach
        
    </table>
</body>
</html>