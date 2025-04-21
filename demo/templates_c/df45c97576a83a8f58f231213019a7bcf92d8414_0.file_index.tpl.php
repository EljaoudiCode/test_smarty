<?php
/* Smarty version 5.4.5, created on 2025-04-21 22:11:14
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6806a6629fd647_70806967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df45c97576a83a8f58f231213019a7bcf92d8414' => 
    array (
      0 => 'index.tpl',
      1 => 1745266259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Add_Patient.tpl' => 1,
    'file:update.tpl' => 1,
    'file:delete_patient.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6806a6629fd647_70806967 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient_manager\\demo\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ((true && ($_smarty_tpl->hasVariable('message') && null !== ($_smarty_tpl->getValue('message') ?? null)))) {?>
    <!-- Affiche une alerte avec un message de succès si la variable $message est définie -->
    <div id="customAlert" class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow" style="z-index: 1055; width: 400px;" role="alert">
        <?php echo $_smarty_tpl->getValue('message');?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    </div>
<?php }?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar : Menu de navigation -->
        <div class="col-md-2 sidebar">
            <div class="mb-4">
                <div class="d-flex my-2 py-2">
                    <i class="fas fa-hospital fa-2x me-2 text-white"></i>
                    <div>
                        <h4 class="mb-0" style="font-size: 1.3rem;">MediCore</h4>
                        <span style="font-size: 1rem;">Hospital</span>
                    </div>
                </div>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link text-white" href="#"><i class="fas fa-chart-line me-2"></i> Dashboard</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-user-injured me-2"></i> Patient Details</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-user-md me-2"></i> Doctor Details</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-money-check-alt me-2"></i> Payment Details</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt me-2"></i> E-Channeling</a>
            </nav>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-7 py-4">
            <h2>Healthcare </br><span>Management System</span></h2>

            <!-- Table -->
            <div class="card my-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <input type="text" class="form-control w-auto" placeholder="Search here" style="min-width: 300px;">
                            <button class="btn custom-no-border"><i class="fas fa-filter"></i> Filters</button>
                            <button class="btn custom-no-border"><i class="fas fa-download"></i> Download</button>
                        </div>
                    <div>
                    <button class="btn custom-ajouter-btn" data-bs-toggle="modal" data-bs-target="#addPatientModal">
                        <i class="fas fa-plus"></i> Ajouter
                    </button>
                </div>
            </div>

            <table class="table table-hover table-bordered" >
                <thead>
                    <tr>
                        <th></th>
                        <th>NAME</th>
                        <th>MOB</th>
                        <th>DATE</th>
                        <th>DOCTOR</th>
                        <th>DEPARTMENT</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td><img src="<?php echo $_smarty_tpl->getValue('patient')['Image'];?>
" class="doctor-avatar" /></td>
                        <td><?php echo $_smarty_tpl->getValue('patient')['nom'];?>
 <?php echo $_smarty_tpl->getValue('patient')['prenom'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('patient')['tel'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('patient')['Date_dossier'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('patient')['Medecin'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('patient')['Departement'];?>
</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item edit-patient-btn" href="#" 
                                        data-bs-toggle="modal" data-bs-target="#updateModal"
                                        data-id="<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" data-nom="<?php echo $_smarty_tpl->getValue('patient')['nom'];?>
"
                                        data-prenom="<?php echo $_smarty_tpl->getValue('patient')['prenom'];?>
" data-tel="<?php echo $_smarty_tpl->getValue('patient')['tel'];?>
" 
                                        data-naissance="<?php echo $_smarty_tpl->getValue('patient')['date_naissance'];?>
" data-genre="<?php echo $_smarty_tpl->getValue('patient')['genre'];?>
"
                                        data-date_dossier="<?php echo $_smarty_tpl->getValue('patient')['Date_dossier'];?>
" data-medecin="<?php echo $_smarty_tpl->getValue('patient')['Medecin_id'];?>
"
                                        data-image="<?php echo $_smarty_tpl->getValue('patient')['Image'];?>
"><i class="fas fa-edit me-2"></i>Modifier</a></li>
                                    
                                    <li><a class="dropdown-item text-danger delete-patient-btn" href="#"
                                        data-id="<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" data-nom="<?php echo $_smarty_tpl->getValue('patient')['nom'];?>
"><i class="fas fa-trash-alt me-2"></i>Supprimer</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row text-center">

        <div class="col-md-4 mb-3">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #5dade2;">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <div class="space-between-texts text-start">
                    <small>ADMIT NEW</small>
                    <h4 class="m-0" style="color: #5dade2;">PATIENT</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #154360;">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="space-between-texts text-start">
                    <small>EMERGENCY</small>
                    <h4 class="m-0" style="color: #154360;">ROOM</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #48c9b0;">
                    <i class="bi bi-capsule"></i>
                </div>
                <div class="space-between-texts text-start">
                    <small>PHARMACY</small>
                    <h4 class="m-0" style="color: #48c9b0;">DETAILS</h4>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<?php $_smarty_tpl->renderSubTemplate("file:Add_Patient.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:delete_patient.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- Right Panel -->
<div class="col-md-3 py-4 right-panel right-offset">
    <div class="row g-3">

        <div class="col-6 stat-wrapper">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #d1f2eb;">
                    <i class="bi bi-calendar-week-fill"></i>
                </div>
                <div class="space-between-texts text-start">
                    <h4 class="m-0">140</h4>
                    <small>Total Appointments</small>
                </div>
            </div>
        </div>
        <div class="col-6 stat-wrapper">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #d1f2eb;">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="space-between-texts text-start">
                    <h4 class="m-0">370</h4>
                    <small>Total Patient</small>
                </div>
            </div>
        </div>
        <div class="col-6 stat-wrapper">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #d1f2eb;">
                    <i class="bi bi-x-circle-fill"></i>
                </div>
                <div class="space-between-texts text-start">
                    <h4 class="m-0">070</h4>
                    <small>Total Cancellation</small>
                </div>
            </div>
        </div>
        <div class="col-6 stat-wrapper">
            <div class="card-stat">
                <div class="circle-icon" style="background-color: #d1f2eb;">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div class="space-between-texts text-start">
                    <h4 class="m-0">120</h4>
                    <small>Total Avg per Doctor</small>
                </div>
            </div>
        </div>

        <div class="card my-4 py-4">
            <h4>Available Doctors</h4>
            <input type="text" class="form-control mb-3" placeholder="Search here">

            <div class="container">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('medecins'), 'medecin', false, 'index');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('medecin')->value) {
$foreach1DoElse = false;
?>
                        <div class="col-md-4 text-center mb-4">
                            <img src="<?php echo $_smarty_tpl->getValue('medecin')['image'];?>
" class="doctor-avatar" />
                            <div style="white-space: nowrap;">
                                <small style="color: #48c9b0;"><?php echo $_smarty_tpl->getValue('medecin')['Medecin'];?>
</small><br>
                                <small class="text-muted" style="font-size: 0.7rem;"><?php echo $_smarty_tpl->getValue('medecin')['Departement'];?>
</small>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

        </div>

    </div>
</div>

  </div>
</div>

<?php echo '<script'; ?>
>
    document.addEventListener("DOMContentLoaded", () => {
        const editButtons = document.querySelectorAll(".edit-patient-btn");

        editButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                document.getElementById("edit-id").value = btn.dataset.id;
                document.getElementById("edit-nom").value = btn.dataset.nom;
                document.getElementById("edit-prenom").value = btn.dataset.prenom;
                document.getElementById("edit-tel").value = btn.dataset.tel;
                document.getElementById("edit-naissance").value = btn.dataset.naissance;
                document.getElementById("edit-genre").value = btn.dataset.genre;
                document.getElementById("edit-date-dossier").value = btn.dataset.date_dossier;
                document.getElementById("edit-medecin").value = btn.dataset.medecin;
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-patient-btn');
        const modal = new bootstrap.Modal(document.getElementById('deletePatientModal'));
        const inputId = document.getElementById('delete-patient-id');
        const spanNom = document.getElementById('delete-patient-nom');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const id = this.dataset.id;
                const nom = this.dataset.nom;

                inputId.value = id;
                spanNom.textContent = nom;

                modal.show();
            });
        });
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
