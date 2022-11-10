<html lang="fr">
    <head>
        <title>Modification d'une commande</title>
    </head>
    <body>
        <h1>Modification d'une commande</h1>
        <form action="/order/edit" method="post">
        @csrf
        <label for="id_orders"></label>
        <input type="hidden" name="id_orders" value="{{$orders->id_orders}}" />
        <label for="labels"></label>
        <input type="text" id="labels" name="labels" placeholder="labels" value="{{$orders->labels}}"/>
        <label for="orders_date"></label>
        <input type="date" id="orders_date" name="orders_date" placeholder="date de la commande" value="{{$orders->orders_date}}" required/>
        <label for="orders_received_date"></label>
        <input type="date" id="orders_received_date" name="orders_received_date" placeholder="date de reception" value="{{$orders->orders_received_date}}" required/>
        <label for="sum_total"></label>
        <input type="text" id="sum_total" name="sum_total" placeholder="coût" value="{{$orders->sum_total}}"/>
        <label for="status"></label>
        <input type="text" id="status" name="status" placeholder="status" value="{{$orders->status}}"/>
        <label for="pdf"></label>
        <input type="text" id="pdf" name="pdf" placeholder="pdf" value="{{$orders->pdf}}"/>
        <label for="id_deliverys"></label>
        <input type="text" id="id_deliverys" name="id_deliverys" placeholder="id_deliverys" value="{{$orders->id_deliverys}}" required/>
        <label for="id_users"></label>
        <input type="text" id="id_users" name="id_users" placeholder="id_users" value="{{$orders->id_users}}" required/>
        <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>