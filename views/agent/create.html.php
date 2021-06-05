<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=agentController&task=add" method="POST">
                <fieldset>
                    <legend>Nouvel Agent</legend>
                    <div class="form-group">
                        <label for="login" class="form-label mt-4">Login</label>
                        <input required name="login" type="text" class="form-control" id="login"
                            placeholder="Login de l'agent">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-4">Mot de passe</label>
                        <input required name="password" type="text" class="form-control" id="password"
                            placeholder="Mot de passe de l'agent">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="form-label mt-4">Nom</label>
                        <input required name="nom" type="text" class="form-control" id="nom"
                            placeholder="Entrez le nom de l'agent">
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="form-label mt-4">Prénom</label>
                        <input required name="prenom" type="text" class="form-control" id="prenom"
                            placeholder="Entrez le prenom de l'agent">
                    </div>
                    <div class="form-group">
                        <label for="num_agent" class="form-label mt-4">Numero agent</label>
                        <input required name="num_agent" type="number" class="form-control" id="num_agent"
                            placeholder="Numero de l'agent">
                    </div>

                    <div class="form-group">
                        <label for="role" class="form-label mt-4">Role</label>
                        <select class="form-select" name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="user">Agent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idAgence" class="form-label mt-4">Agence</label>
                        <select class="form-select" name="idAgence" id="idAgence">
                            <option>Sélecionner votre agence</option>
                            <?php foreach ($agences as $agence): ?>
                            <option value="<?= $agence->idAgence ?>"><?= $agence->nom ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="mt-4 mb-4 btn btn-primary btn-lg">Créer</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>