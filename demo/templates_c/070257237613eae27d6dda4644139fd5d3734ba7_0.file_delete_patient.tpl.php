<?php
/* Smarty version 5.4.5, created on 2025-04-21 19:25:46
  from 'file:delete_patient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_68067f9a6a1568_26589968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070257237613eae27d6dda4644139fd5d3734ba7' => 
    array (
      0 => 'delete_patient.tpl',
      1 => 1745255892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68067f9a6a1568_26589968 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient_manager\\demo\\templates';
?><!-- Modal de confirmation pour la suppression d'un patient -->
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
<?php }
}
