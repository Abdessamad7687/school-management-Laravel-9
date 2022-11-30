<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <a class="log-in" href="{{ route('image-upload') }}">
        <span>Import gallery photos</span>
        </a>
        <div class="col-md-12 my-5 mx-auto">
            <button class="alert alert-info w-100">New registrants ( {{$inscriptions->count() }} )</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom*</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email*</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inscriptions as $inscription)
                    <tr>
                        <th scope="row"> {{ $inscription->id }} </th>
                        <td> {{ $inscription->nom }} </td>
                        <td> {{ $inscription->prenom }} </td>
                        <td> {{ $inscription->email }}  </td>
                        <td> {{ $inscription->telephone }} </td>
                        <td> {{ $inscription->message }} </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-archive-fill" viewBox="0 0 16 16">
                            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                            </svg>
                        </td>
                    </tr>
                    @endforeach
                    {{ $inscriptions->links() }}
                </tbody>
            </table>
        </div>



        <div class="col-md-12 my-5 mx-auto">
            <button class="alert alert-info w-100">Messages box ( {{ $Contacts->count() }} )</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($Contacts as $Contact)
                    <tr>
                        <th scope="row">{{ $Contact->id }}</th>
                        <td>{{ $Contact->nom }}</td>
                        <td>{{ $Contact->email }}</td>
                        <td>{{ $Contact->Message }}</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-archive-fill" viewBox="0 0 16 16">
                            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                            </svg>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>