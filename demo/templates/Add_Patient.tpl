<!-- Modal pour ajouter un patient -->
<div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- En-tête du modal -->
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addPatientLabel">
                    <i class="fas fa-user-plus me-2"></i> AJOUTER UN PATIENT
                </h5>
                <!-- Bouton pour fermer le modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire d'ajout du patient -->
                <form class="row g-3" method="post" action="index.php" enctype="multipart/form-data">
                    <!-- Action pour l'ajout d'un patient -->
                    <input type="hidden" name="action" value="ajouter_patient">
                    
                    <!-- Champ pour le nom du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Nom :</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>

                    <!-- Champ pour le prénom du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Prénom :</label>
                        <input type="text" name="prenom" class="form-control" required>
                    </div>

                    <!-- Champ pour le téléphone du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Téléphone :</label>
                        <input type="text" name="tel" class="form-control" required>
                    </div>

                    <!-- Champ pour la date de naissance du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Date de naissance :</label>
                        <input type="date" name="date_naissance" class="form-control" required>
                    </div>

                    <!-- Sélection du genre du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Genre :</label>
                        <select name="genre" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <!-- Champ pour la date du dossier médical -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Date du dossier :</label>
                        <input type="date" name="date_dossier" class="form-control" required>
                    </div>

                    <!-- Sélection du médecin référent pour le patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Médecin :</label>
                        <select name="medecin_id" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            {foreach $medecins as $index => $medecin}
                            <option value="{$medecin.id}">{$medecin.Medecin}</option>
                            {/foreach}
                        </select>
                    </div>

                    <!-- Champ pour la photo du patient -->
                    <div class="col-md-6">
                        <label class="form-label text-uppercase">Photo :</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Boutons de validation et fermeture -->
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
