<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="{{ route('search') }}" method="POST">
    @csrf

    <label>Search by Book Name:</label>

    <input type="text" name="book_name" placeholder="Enter book name">

    <button type="submit">Search</button>
   </form>
    <br><br>

     <form action="{{ route('available') }}" method="POST">
    @csrf
    <button type="submit">check available books</button>

    </form>
    <br><br>
                 
    <table border="1">
        <tr>
            <th>Book name</th>
            <th>Author name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            </tr>
            @foreach($libraries as $library)
            <tr>
                <td>{{$library->book_name}}</td>
                <td>{{$library->author}}</td>
                <td>{{$library->category}}</td>
                <td>{{$library->price}}</td>
                <td>
                 @if($library->quantity == 0)
                          Not Available
                      @else
                      {{ $library->quantity }}
                     @endif
                        </td>
                <td>
                    <a href="{{route('edit',$library->id)}}">edit</a>
                 </td>
                 <td>
                    <form action="{{ route('delete', $library->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
                 </td>
            </tr>  
              @endforeach
    </table>

</body>
</html>