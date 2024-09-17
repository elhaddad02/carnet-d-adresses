<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/contactForm.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/welcome.css') }}">
    <title>Document</title>
</head>
<body>
    @include('welcome')
    <h1>Update contact</h1>
   <form action="/update-user/{{ $user[0]->id}}" method="POST">
    @method('put')
    @csrf
    
    <label for="name">Full Name</label>
    <input id="name" type="text" name="name" value="{{ $user[0]->name }}" required>
    @error('name')
    <span>
        <strong style="color: brown">{{ $message }}</strong>
    </span>
    @enderror

    <label for="phone_number">Phone Number</label>
    <input id="phone_number" type="text" name="phone_number" value="{{ $user[0]->number_phone }}" required>
    @error('phone_number')
    <span>
        <strong style="color: brown">{{ $message }}</strong>
    </span>
    @enderror

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="{{ $user[0]->email }}" required>
    @error('email')
    <span>
        <strong style="color: brown">{{ $message }}</strong>
    </span>
    @enderror

    <button type="submit">Update Contact</button>

</form>


</body>
</html>