<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
<a href="{{ url('/create')}}">Add new member</a>
    <ul>
        @foreach($members as $member)
        <div class="card" style="width: 20rem; margin: 2rem auto">
            <div class="card-body">
                <h3 class="card-title"><strong><u>Name:</u></strong> {{$member->name}}</h3>
                <h5 class="card-title"><strong><u>Email:</u></strong> {{$member->email}}</h5>

                <h5 class="card-title"><strong><u>Schools:</u></strong></h5>
                    <ul>
                        @foreach($member->schools as $school)
                        <li><a href="{{ url('/schools/'.$school->id)}}">{{$school->name}}</a></li>
                        @endforeach
                    </ul>
            </div>
        </div>
        @endforeach
    </ul>
</body>

</html>