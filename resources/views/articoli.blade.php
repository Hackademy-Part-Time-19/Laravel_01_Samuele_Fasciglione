<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document | Articoli</title>
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>

        <h1 class="titolo">Articoli</h1>

        <div class="container-navbar">

            <ul class="nav">

                <li> <a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('articoli')}}">Articoli</a></li>
                <li><a href="{{ route('chisono')}}">Chi sono</a></li>



            </ul>

            <div class="container">
                <div class="row">

                    @foreach ($articoli as $articolo)

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$articolo['titolo']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$articolo['nome']}}</h6>
                            <p class="card-text">{{$articolo['descrizione']}}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>


                    @endforeach
                </div>
            </div>

        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>