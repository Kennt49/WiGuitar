<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Voir les addresses rentrer</h1>
        <table>
            @foreach ($addresses as $adresse)
            <tr>
                <td>Rue = {{$adresse->street}} </td>
                <td>Complement = {{$adresse->complement}} </td>
                <td>Code postale = {{$adresse->zip_code}} </td>
                <td>Ville = {{$adresse->city}} </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>