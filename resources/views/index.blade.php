<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}"method="post">
        @csrf

        <label>Book name:</label>
        <input type="text" name="book_name">
        <br><br>
         <label>Author name:</label>
        <input type="text" name="author">
        <br><br>
         

        <label>category:</label>
        <select name="category">
            <option value="fiction">fiction</option>
            <option value="non_fiction">non_fiction</option>
            <option value="documentry">documentry</option>
        </select>
        <br><br>

         <label>price:</label>
        <input type="number" name="price">
        <br><br>

        <label>quantity:</label>
        <input type="number" name="quantity">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>