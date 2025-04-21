<!-- Modal pour modifier les informations d'un patient -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- En-tête du modal -->
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="updateModalLabel">
                    <i class="fas fa-user-edit me-2"></i> MODIFIER UN PATIENT
                </h5>
                <!-- Bouton pour fermer le modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour modifier un patient -->
                <form class="row g-3" method="post" action="index.php" enctype="multipart/form-data">
                    <!-- Action pour la modification d'un patient -->
                    <input type="hidden" name="action" value="modifier_patient">
                    <input type="hidden" name="id" id="edit-id">

                    <!-- Champ pour le nom du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Nom :</label>
                        <input type="text" name="nom" class="form-control" id="edit-nom" required>
                    </div>

                    <!-- Champ pour le prénom du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Prénom :</label>
                        <input type="text" name="prenom" class="form-control" id="edit-prenom" required>
                    </div>

                    <!-- Champ pour le téléphone du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Téléphone :</label>
                        <input type="text" name="tel" class="form-control" id="edit-tel" required>
                    </div>

                    <!-- Champ pour la date de naissance du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Date de naissance :</label>
                        <input type="date" name="date_naissance" class="form-control" id="edit-naissance" required>
                    </div>

                    <!-- Sélection du genre du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Genre :</label>
                        <select name="genre" class="form-select" id="edit-genre" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <!-- Champ pour la date du dossier médical -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Date du dossier :</label>
                        <input type="date" name="date_dossier" class="form-control" id="edit-date-dossier" required>
                    </div>

                    <!-- Sélection du médecin référent pour le patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Médecin :</label>
                        <select name="medecin_id" class="form-select" id="edit-medecin" required>
                            <option value="">-- Sélectionner --</option>
                            {foreach from=$medecins item=med}
                            <option value="{$med.id}">{$med.Medecin}</option>
                            {/foreach}
                        </select>
                    </div>

                    <!-- Champ pour changer la photo du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Changer la photo :</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Boutons de validation ou de fermeture -->
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn" style="background-color: #a3e4d7; color: black;">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
