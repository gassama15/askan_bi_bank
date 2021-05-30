<h1 class="text-center">Bienevenue chez Askan Bi Banque</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=adminController&task=show" method="POST">
                <fieldset>
                    <legend>Authentification</legend>
                    <div class="form-group">
                        <label for="login" class="form-label mt-4">Login</label>
                        <input name="login" type="text" class="form-control" id="login" aria-describedby="emailHelp"
                            placeholder="Entrez votre login">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre login avec
                            qui
                            que ce soit.</small>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-4">Mot de passe</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Entrez votre mot de passe">
                    </div>
                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Connexion</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>