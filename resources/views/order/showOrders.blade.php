<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Voir les toutes les commandes</h1>
        <table>
            @foreach ($orders as $order)
            <tr>
                <td>id_commande = {{$order->id_orders}} </td>
                <td>Libellé = {{$order->labels}} </td>
                <td>date de commande = {{$order->orders_date}} </td>
                <td>date de recption de la commande = {{$order->orders_received_date}} </td>
                <td>coût total = {{$order->sum_total}} </td>
                <td>status de la commande = {{$order->satus}} </td>
                <td>facture en pdf = {{$order->pdf}} </td>
                <td>id_livraison = {{$order->id_deliverys}} </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>