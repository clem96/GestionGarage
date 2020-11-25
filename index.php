<?PHP

function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include 'PHP/VIEW/Menu.php';
    include $chemin . $nom . '.php';
}

DbConnect::init();

$routes = [
    "default" => ["PHP/VIEW/", "PageAccueil", "page d'accueil"],

    "listeClient" => ["PHP/VIEW/", "ListeClient", "Liste des clients"],
    "formClient" => ["PHP/VIEW/", "FormClient", "Détail du client"],
    "actionClient" => ["PHP/VIEW/", "ActionClient", "Modification du client"],

    "listeVehicule" => ["PHP/VIEW/", "ListeVehicule", "Liste des vehicules"],
    "formVehicule" => ["PHP/VIEW/", "FormVehicule", "Détail du vehicule"],
    "actionVehicule" => ["PHP/VIEW/", "ActionVehicule", "Modification du vehicule"],

    "listeReparation" => ["PHP/VIEW/", "ListeReparation", "Liste des reparations"],
    "formReparation" => ["PHP/VIEW/", "FormReparation", "Détail de la reparation"],
    "actionReparation" => ["PHP/VIEW/", "ActionReparation", "Modification de la reparation"],

    "listePiece" => ["PHP/VIEW/", "ListePiece", "Liste des pieces"],
    "formPiece" => ["PHP/VIEW/", "FormPiece", "Détail de la piece"],
    "actionPiece" => ["PHP/VIEW/", "ActionPiece", "Modification de la piece"],

    "listeFacture" => ["PHP/VIEW/", "ListeFacture", "Liste des factures"],
    "formFacture" => ["PHP/VIEW/", "FormFacture", "Détail de la facture"],
    "actionFacture" => ["PHP/VIEW/", "ActionFacture", "Modification de la facture"],

    "listeIntervention" => ["PHP/VIEW/", "ListeIntervention", "Liste des interventions"],
    "formIntervention" => ["PHP/VIEW/", "FormIntervention", "Détail de l'intervention"],
    "actionIntervention" => ["PHP/VIEW/", "ActionIntervention", "Modification de l'ntervention"]
];

if (isset($_GET["codePage"]))
{

    $codePage = $_GET["codePage"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}
