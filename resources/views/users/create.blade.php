<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
</head>

<body>
    <h1>New create page</h1>
    <form action="/user-create" method="POST">
        @csrf
        <input type="text" name="text"/>
        <input type="email" name="email" />
        <button type="submit">submit</button>
    </form>
</body>

</html>
