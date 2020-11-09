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
        </tr>
        <tr>
        @foreach($products as $product)
            <td>$product->name</td>
            
        @endforeach
        
        </tr>
    </table>
</body>
</html>