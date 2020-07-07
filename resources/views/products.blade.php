<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product Type</th>
                                <th scope="col">Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lista_prodotti as $prodotto)
                            <tr>
                                <td>{{ $prodotto->id }}</td>
                                <td>{{ $prodotto->name }}</td>
                                <td>{{ $prodotto->product_type }}</td>
                                <td>{{ $prodotto->size }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
