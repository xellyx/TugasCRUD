<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kategori</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style3.css') }}">
</head>

<body>

    @extends('app')

    @section('content')
        <a class="btn btn-primary mt-3" href="{{ url('/category') }}">
            <- Kembali</a>

                <h1>EDIT KATEGORI</h1>
                    <form action="/category/{{ $category->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

                        @error('name')
                            <div class="invalid-feedback">
                                Nama tidak boleh kosong!
                            </div>
                        @enderror

                        <button type="submit" class="svbtn btn-primary mt-3">Ubah</button>
                    </form>
            @endsection
</body>

</html>
