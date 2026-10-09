<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',$library->id)}}" method="post">
        @csrf
        @method('PUt')
        <label>Book name:</label>
        <input type="text" name="book_name" value="{{$library->book_name}}">
        <br><br>

        <label>Author name:</label>
        <input type="text" name="author" value="{{$library->author}}">
        <br><br>

        <label>Category:</label>
        <input type="text" name="category" value="{{$library->category}}">
        <br><br>

        <label>Price:</label>
        <input type="text" name="price" value="{{$library->price}}">
        <br><br>

        <label>Quantity:</label>
        <input type="text" name="quantity" value="{{$library->quantity}}">
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>