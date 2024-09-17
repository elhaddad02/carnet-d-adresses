<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contactListe.css">
    <title>Document</title>
</head>
<body>
    @include('welcome')
    <h1>All Contacts</h1>
    <table>
        <tr>
            <th>name</th>
            <th>Number phone</th>
            <th>email</th>
            <th class="action">action</th>
        </tr>

        @foreach ($allContacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->number_phone}}</td>
            <td>{{$contact->email}}</td>
            <td><a class="update" href="/edit-contact/{{$contact->id}}">UPDATE</a>
                <a class="delete" href="/delete/{{$contact->id}}">DELETE</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>