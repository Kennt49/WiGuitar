<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Voir les toutes les caractéristiques</h1>
        <table>
            @foreach ($features as $feature)
            <tr>
                <td>Fabricant = {{$feature->maker}} </td>
                <td>matière du corps = {{$feature->body_material}} </td>
                <td>matière du manche = {{$feature->handle_material}} </td>
                <td>Nb de Frettes = {{$feature->number_frets}} </td>
                <td>Nb de cordes = {{$feature->number_strings}} </td>
                <td>Réglages = {{$feature->settings}} </td>
                <td>switch = {{$feature->switch_micro}} </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>