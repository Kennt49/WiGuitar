<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout d'une commande</title>
    </head>
    <body>
        <h1>Ajouter une commande</h1>
        <form action="/order/addOrder" method="post">
        @csrf
        <label for="id_orders"></label>
        <input type="hidden" name="id_orders"/>
        <label for="labels"></label>
        <input type="text" id="labels" name="labels" placeholder="labels"/>
        <label for="orders_date">date de la commande:</label>
        <input type="date" id="orders_date" name="orders_date" placeholder="date de la commande" required/>
        <label for="orders_received_date">date de reception estimée:</label>
        <input type="date" id="orders_received_date" name="orders_received_date" placeholder="date de reception" required/>
        <label for="sum_total"></label>
        <input type="text" id="sum_total" name="sum_total" placeholder="coût"/>
        <label for="status"></label>
        <select name="status" id="status">
        <option value="">Sélectionnez le status</option>
            <option value="vendu">Vendu</option>
            <option value="facturée">Facturée</option>
            <option value="annulée">Annulée</option>
        </select>
        <label for="pdf">facture:</label>
        <input type="text" id="pdf" name="pdf" placeholder="pdf"/>
        <label for="id_deliverys"></label>
        <input type="text" id="id_deliverys" name="id_deliverys" placeholder="id_deliverys" required/>
        <label for="id_users"></label>
        <input type="text" id="id_users" name="id_users" placeholder="id_users" required/>
        <input type="submit" value="Valider"/>
        </form>
    </body>
</html>