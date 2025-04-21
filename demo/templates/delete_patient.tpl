<!-- Modal de confirmation pour la suppression d'un patient -->
<div class="modal fade" id="deletePatientModal" tabindex="-1" aria-labelledby="deletePatientLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Formulaire de suppression -->
        <form method="post" action="index.php">
            <!-- Action pour la suppression d'un patient -->
            <input type="hidden" name="action" value="supprimer_patient">
            <input type="hidden" name="id" id="delete-patient-id">

            <div class="modal-content">
                <!-- En-tête du modal -->
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deletePatientLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i> Confirmation de suppression
                    </h5>
                    <!-- Bouton pour fermer le modal -->
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>

                <!-- Corps du modal avec le message de confirmation -->
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer le patient <strong id="delete-patient-nom"></strong> ? Cette action est irréversible.</p>
                </div>

                <!-- Boutons de confirmation ou annulation -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </form>
    </div>
</div>
