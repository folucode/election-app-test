<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>'
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="mx-auto">All polling units</h4>
                <ul class="list-group">
                    @foreach ($lgas as $lga)
                        <li class="list-group-item"><a
                                href="/results/lgas/{{ $lga->uniqueid }}">{{ $lga->lga_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <h4>Results for {{ $lga->lga_name }}</h4>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Party</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (strlen($message) > 0)
                            <tr>
                                <td>
                                    <h5>{{ $message }}</h5>
                                </td>
                            </tr>
                        @else
                            @foreach ($scores as $party => $score)

                                <tr>
                                    <th scope="row">#</th>
                                    <td>{{ $party }}</td>
                                    <td>{{ $score }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>

</html>
