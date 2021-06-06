<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=compteController&task=add" method="POST">
                <fieldset>
                    <legend>Nouvelle compte</legend>
                    <div class="form-group">
                        <label for="num_compte" class="form-label mt-4">Numero compte</label>
                        <input name="num_compte" type="text" class="form-control" id="num_compte"
                            placeholder="Entrez le numero de votre compte">
                    </div>
        
                    <div class="form-group">
                        <label for="solde" class="form-label mt-4">solde</label>
                        <input name="solde" type="solde" class="form-control" id="solde"
                            placeholder="Entrez le solde">
                    </div>

                    <div class="form-group">
                        <label for="statut" class="form-label mt-4">statut</label>
                        <input name="statut" type="statut" class="form-control" id="statut"
                            placeholder="statut du compte">
                    </div>

                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>