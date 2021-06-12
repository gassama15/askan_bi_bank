<div class="container">
    <?php if (!empty($historiques)): ?>
    <h3><?= sizeof($historiques) ?> opération(s)</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Type Opération</th>
                <th scope="col">Montant</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historiques as $historique): ?>
            <tr class="table-active">
                <td><?= $historique->idOperation ?></td>
                <td><?= $historique->typeOperation ?></td>
                <td><?= $historique->montant ?> F CFA</td>
                <td><?= $historique->dateOperation ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <div class="alert alert-info">Vous n'avez fait aucune opération pour le moment</div>
    <?php endif; ?>
</div>