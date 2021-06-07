<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Type Client</th>
                <th scope="col">Numéro Compte</th>
                <th scope="col">Date ouverture</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr class="table-active">
                <td><?= $client->idClient ?></td>
                <td><?= $client->nom ?></td>
                <td><?= $client->prenom ?></td>
                <td><?= $client->typeClient ?></td>
                <td><?= $client->num_compte ?></td>
                <td><?= $client->date_ouverture ?></td>
                <td><?= $client->statut == 1 ? 'Actif' : 'Inactif' ?></td>
                <td>
                    <span><a href="index.php?controller=clientController&task=show&id=<?= $client->idClient ?>"><i
                                class="fas fa-eye text-info"></i></a></span> -
                    <span><a href=""><i class="fas fa-edit text-warning"></i></a></span> -
                    <span><a onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer?')" href=""><i
                                class="fas fa-trash text-danger"></i></a></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>