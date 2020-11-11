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
            <div class="col-sm-8">

                @if (Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <h1 class="mb-lg-4">Add a new polling Unit</h1>
                <form action="/pollingunit/new" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ward</label>
                        <div class="col-sm-10">
                            <select name="ward" class="custom-select">
                                <option selected>Open this select menu</option>
                                @foreach ($wards as $ward)
                                    <option value="{{ $ward->uniqueid }},{{ $ward->ward_id }}">{{ $ward->ward_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">LGA</label>
                        <div class="col-sm-10">
                            <select name="lga" class="custom-select">
                                <option selected>Open this select menu</option>
                                @foreach ($lgas as $lga)
                                    <option value="{{ $lga->uniqueid }},{{ $lga->lga_id }}">{{ $lga->lga_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Polling Unit Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="polling_unit_number" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Polling Unit Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="polling_unit_name" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Polling Unit description </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="polling_unit_description"
                            rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Your name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
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
