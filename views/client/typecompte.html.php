<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=typeCompteController&task=add" method="POST">
                <fieldset>
                    <legend>Type Compte</legend>
                    <div class="form-group">
                        <label for="code" class="form-label mt-4">Code du type de compte</label>
                        <input name="codeType" type="text" class="form-control" id="code" value="<?= $code ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="form-label mt-4">Libellé du type de compte</label>
                        <input name="libelle" type="text" class="form-control" id="libelle"
                            placeholder="Entrez le libellé du type">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>