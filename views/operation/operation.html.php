<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=operationController&task=verify" method="post">
                <div class="form-group">
                    <label for="num_compte" class="form-label mt-4">Numéro de compte</label>
                    <input autocomplete="off" required id="num_compte" name="num_compte" type="text"
                        class="form-control" value="<?= $num_compte ??
                        '' ?>">
                </div>
                <div class="d-grid">
                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-lg">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>