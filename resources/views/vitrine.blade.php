<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Vitrine</title>
    </head>
    <body>
        <div>
            @extends('layouts.produto', [
                'name' => $produto['name'],
                'price' => $produto['price']
            ])
            @section('image')
                <img
                    alt="{{$produto['name']}}"
                    src="{{$produto['image']}}"
                >
            @endsection
        </div>
    </body>
</html>
