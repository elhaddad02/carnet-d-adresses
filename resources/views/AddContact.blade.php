<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contactForm.css">
    <title>Document</title>
</head>
<body>
    @include('welcome')
    <h1>Add New Contact</h1>
    <form action="/add-user" method="POST">

        @csrf

        <label for="name">Full Name</label>
        <input type="text" name="name" id="name">
        @error('name')
        <span>
            <strong style="color: red" >{{ $message }}</strong>
        </span>
        @enderror

        <label for="number_phone">Number Phone</label>
        <input type="text" name="number_phone" id="number_phone">
         @error('number_phone')
        <span>
            <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        @error('email')
        <span>
            <strong style="color: red">{{ $message }}</strong>
        </span>
        @enderror
        <button>Ajouter</button>
    </form>
</body>
</html>