<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=operationController&task=create" method="POST">
                <div class="form-group">
                    <label for="montant" class="form-label mt-4">Montant</label>
                    <input required id="montant" value="<?= $montant ??
                        '' ?>" name="montant" type="number" class="form-control">
                </div>
                <div class="row p-3">
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="typeOperation" id="optionsRadios3"
                                    value="depot" <?= isset($typeOperation)
                                        ? ''
                                        : 'checked' ?>>
                                Dépôt
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="typeOperation" id="optionsRadios3"
                                    value="retrait" <?= isset($typeOperation)
                                        ? 'checked'
                                        : '' ?>>
                                Retrait
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-lg">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>