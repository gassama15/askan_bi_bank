<h1 class="text-center">Bienevenue chez Askan Bi Banque</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=authController&task=signin" method="POST">
                <fieldset>
                    <legend>Authentification Espace Client</legend>
                    <div class="form-group">
                        <label for="num_compte" class="form-label mt-4">Login</label>
                        <input required name="num_compte" type="text" class="form-control" id="login"
                            aria-describedby="emailHelp" placeholder="Entrez votre Numéro de Compte" value="<?= $num_compte ??
                                '' ?>">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre login avec
                            qui
                            que ce soit.</small>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-4">Mot de passe</label>
                        <input required name="password" type="password" class="form-control" id="password"
                            placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="mt-4 mb-4 btn btn-primary btn-lg">Connexion</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>