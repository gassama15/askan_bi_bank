<div class="container">
    <form action="index.php?controller=clientController&task=add" method="POST">
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend>Client</legend>
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
                        <label for="adresse" class="form-label mt-4">Adresse du client</label>
                        <input required name="adresse" type="text" class="form-control" id="adresse"
                            placeholder="Adresse du client">
                    </div>

                    <div class="form-group">
                        <label for="tel" class="form-label mt-4">Téléphone du client</label>
                        <input required name="tel" type="tel" class="form-control" id="tel"
                            placeholder="Téléphone du client">
                    </div>

                    <div class="form-group">
                        <label for="cni" class="form-label mt-4">CNI</label>
                        <input required name="cni" type="number" class="form-control" id="cni"
                            placeholder="CNI du client">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label mt-4">Email du client</label>
                        <input required name="email" type="email" class="form-control" id="email"
                            placeholder="Email du client">
                    </div>
                    <div class="row p-3">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="typeClient" id="optionsRadios3"
                                        value="physique" checked>
                                    Physique
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="typeClient" id="optionsRadios3"
                                        value="moral">
                                    Moral
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend>
                        Compte
                    </legend>
                    <div class="form-group">
                        <label for="solde" class="form-label mt-4">Solde</label>
                        <input required name="solde" type="number" class="form-control" id="solde" placeholder="Solde">
                    </div>
                    <div class="form-group">
                        <label for="idAgence" class="form-label mt-4">Agence</label>
                        <select class="form-select" name="idAgence" id="idAgence">
                            <option>Sélecionner votre agence</option>
                            <?php foreach ($agences as $agence): ?>
                            <option value="<?= $agence->idAgence ?>" <?= $session->read(
    'auth'
)->idAgence == $agence->idAgence
    ? 'selected'
    : null ?>><?= $agence->nom ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idAgent" class="form-label mt-4">Agent</label>
                        <select class="form-select" name="idAgent" id="idAgent">
                            <option>Sélecionner votre agent</option>
                            <?php foreach ($agents as $agent): ?>
                            <option value="<?= $agent->idAgent ?>" <?= $session->read(
    'auth'
)->idAgent == $agent->idAgent
    ? 'selected'
    : null ?>>
                                <?= $agent->nom .
                                    ' ' .
                                    $agent->prenom ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row p-3">
                        <?php foreach ($comptes as $compte): ?>
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="idtypeCompte"
                                        value="<?= $compte->idtypeCompte ?>" checked="
                                        <?php $compte->libelleType ===
                                        'Compte Epargne'
                                            ? 'checked'
                                            : null; ?>">
                                    <?= $compte->libelleType ===
                                    'Compte Epargne'
                                        ? 'Compte Epargne'
                                        : 'Compte Courant' ?>
                                </label>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </fieldset>
            </div>

            <div class="d-grid p-3">
                <button class="btn btn-primary btn-lg">Créer</button>
            </div>
    </form>
</div>
</div>