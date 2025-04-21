<?php
// Chargement automatique des classes via Composer
require_once __DIR__ . '/../vendor/autoload.php';
// Connexion à la base de données (via une classe Database)
require_once 'configs/Database.php';

// Initialisation de Smarty
$smarty = new \Smarty\Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setConfigDir('configs');
$smarty->setCacheDir('cache');

// Connexion à la base de données via PDO
$pdo = Database::connect();

// ===========================
// Récupération des données patients avec leurs médecins
// ===========================
$sql = "SELECT p.id, p.nom, p.prenom, p.date_naissance, p.tel, p.genre, p.Date_dossier, p.Image, p.Medecin_id, m.Medecin, m.Departement
        FROM patients p
        LEFT JOIN medecins m ON p.Medecin_id = m.id";
$stmt = $pdo->query($sql);
$patients = $stmt->fetchAll();

// Récupération des médecins pour le formulaire
$sqlMedecins = "SELECT id, Medecin, Departement, image FROM medecins";
$stmtMedecins = $pdo->query($sqlMedecins);
$medecins = $stmtMedecins->fetchAll();

// ===========================
// Ajouter un nouveau patient
// ===========================
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['action'] === 'ajouter_patient') {
    // Récupération des données du formulaire
    $nom             = $_POST["nom"];
    $prenom          = $_POST["prenom"];
    $tel             = $_POST["tel"];
    $date_naissance  = $_POST["date_naissance"];
    $genre           = $_POST["genre"];
    $date_dossier    = $_POST["date_dossier"];
    $medecin_id      = $_POST["medecin_id"];

    // Gestion de l’image
    $imagePath = null;
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES["image"]["tmp_name"];
        $fileName = basename($_FILES["image"]["name"]);
        $targetDir = "uploads/patients/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $imagePath = $targetDir . time() . "_" . $fileName;
        move_uploaded_file($tmpName, $imagePath);
    }

    // Insertion dans la base de données
    try {
        $stmt = $pdo->prepare("INSERT INTO patients (nom, prenom, tel, date_naissance, genre, Date_dossier, Medecin_id, Image) 
                               VALUES (:nom, :prenom, :tel, :date_naissance, :genre, :date_dossier, :medecin_id, :image)");

        $stmt->execute([
            ":nom"            => $nom,
            ":prenom"         => $prenom,
            ":tel"            => $tel,
            ":date_naissance" => $date_naissance,
            ":genre"          => $genre,
            ":date_dossier"   => $date_dossier,
            ":medecin_id"     => $medecin_id,
            ":image"          => $imagePath,
        ]);

        header("Location: index.php?success=1");
        exit;
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout du patient : " . $e->getMessage();
        exit;
    }
}

// ===========================
// Modifier un patient existant
// ===========================
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['action'] === 'modifier_patient') {
    // Récupération des données modifiées
    $id              = $_POST["id"];
    $nom             = $_POST["nom"];
    $prenom          = $_POST["prenom"];
    $tel             = $_POST["tel"];
    $date_naissance  = $_POST["date_naissance"];
    $genre           = $_POST["genre"];
    $date_dossier    = $_POST["date_dossier"];
    $medecin_id      = $_POST["medecin_id"];

    // Image facultative
    $imagePath = null;
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES["image"]["tmp_name"];
        $fileName = basename($_FILES["image"]["name"]);
        $targetDir = "uploads/patients/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $imagePath = $targetDir . time() . "_" . $fileName;
        move_uploaded_file($tmpName, $imagePath);
    }

    // Construction de la requête SQL avec ou sans image
    try {
        $sql = "UPDATE patients SET 
                    nom = :nom,
                    prenom = :prenom,
                    tel = :tel,
                    date_naissance = :date_naissance,
                    genre = :genre,
                    Date_dossier = :date_dossier,
                    Medecin_id = :medecin_id";

        if ($imagePath !== null) {
            $sql .= ", Image = :image";
        }

        $sql .= " WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        $params = [
            ":nom"            => $nom,
            ":prenom"         => $prenom,
            ":tel"            => $tel,
            ":date_naissance" => $date_naissance,
            ":genre"          => $genre,
            ":date_dossier"   => $date_dossier,
            ":medecin_id"     => $medecin_id,
            ":id"             => $id,
        ];

        if ($imagePath !== null) {
            $params[":image"] = $imagePath;
        }

        $stmt->execute($params);
        header("Location: index.php?success=2");
        exit;
    } catch (PDOException $e) {
        echo "Erreur lors de la modification : " . $e->getMessage();
        exit;
    }
}

// ===========================
// Supprimer un patient
// ===========================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'supprimer_patient') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    if ($id > 0) {
        $stmt = $pdo->prepare("DELETE FROM patients WHERE id = :id");
        $stmt->execute(['id' => $id]);

        header("Location: index.php?success=3");
        exit;
    } else {
        $message = "ID du patient invalide.";
    }
}

// ===========================
// Assignation des variables Smarty
// ===========================
$smarty->assign("patients", $patients);
$smarty->assign("medecins", $medecins);
$smarty->assign("Name", "Healthcare");
$smarty->assign("title", "Management System");

// Gestion des messages de succès
if (isset($_GET['success'])) {
    if ($_GET['success'] == 1) {
        $smarty->assign('message', 'Patient ajouté avec succès.');
    } elseif ($_GET['success'] == 2) {
        $smarty->assign('message', 'Patient modifié avec succès.');
    } elseif ($_GET['success'] == 3) {
        $smarty->assign('message', 'Patient supprimé avec succès.');
    }
}

// Affichage du template principal
$smarty->display("index.tpl");
?>
