<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Numero Agent</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Role</th>
                <th scope="col">Agence</th>
                <th scope="col">Login</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agents as $agent): ?>
            <tr class="table-active">
                <td><?= $agent->idAgent ?></td>
                <td><?= $agent->num_agent ?></td>
                <td><?= $agent->nom ?></td>
                <td><?= $agent->prenom ?></td>
                <td><?= $agent->role ?></td>
                <td><?= $agent->nom_agence ?></td>
                <td><?= $agent->login ?></td>
                <td><?= $agent->password ?></td>
                <td>
                    <span><a href="index.php?controller=agentController&task=edit&id=<?= $agent->idAgent ?>"><i
                                class="fas fa-edit text-warning"></i></a></span> -
                    <span><a onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer?')"
                            href="index.php?controller=agentController&task=delete&id=<?= $agent->idAgent ?>"><i
                                class="fas fa-trash text-danger"></i></a></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>