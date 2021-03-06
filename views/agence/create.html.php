<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=agenceController&task=add" method="POST">
                <fieldset>
                    <legend>Nouvelle Agence</legend>
                    <div class="form-group">
                        <label for="nom" class="form-label mt-4">Nom Agence</label>
                        <input name="nom" type="text" class="form-control" id="nom"
                            placeholder="Entrez le nom de votre agence">
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="form-label mt-4">Adresse</label>
                        <input name="adresse" type="text" class="form-control" id="adresse"
                            placeholder="Entrez l'adresse de votre agence">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label mt-4">Email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Entrez l'email de votre agence">
                    </div>

                    <div class="form-group">
                        <label for="tel" class="form-label mt-4">Téléhpone</label>
                        <input name="tel" type="tel" class="form-control" id="tel"
                            placeholder="Numero telephone de votre agence">
                    </div>

                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>