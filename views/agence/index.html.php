<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nom Agence</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agences as $agence): ?>
            <tr class="table-active">
                <td><?= $agence->idAgence ?></td>
                <td><?= $agence->nom ?></td>
                <td><?= $agence->adresse ?></td>
                <td><?= $agence->email ?></td>
                <td><?= $agence->telephone ?></td>
                <td>
                    <span><a href="index.php?controller=agenceController&task=edit&id=<?= $agence->idAgence ?>"><i
                                class="fas fa-edit text-warning"></i></a></span> -
                    <span><a href="index.php?controller=agenceController&task=delete&id=<?= $agence->idAgence ?>"><i
                                class="fas fa-trash text-danger"></i></a></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>