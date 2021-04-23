<!DOCTYPE html>
<html lang="en">
    <body>
        <table border="1" bgcolor="#f2f2f2">
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
            </tr>

            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->endereco}}</td>
                </tr>
            @endforeach

        </table>
    </body>
</html>
