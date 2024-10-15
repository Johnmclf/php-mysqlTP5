<?php
require('../src/model.php');
$posts = getPosts();
require('../templates/homepage.php');



// Les 3 erreurs importantes sont :
// - Utilisation de n'est pas conseillé die / exemple utiliser catch 
// - Aucun filtre de sécuriter lors de l'ajout / exemple utiliser filter_var()
// - Généralement la connection à la base de données et effectuer avant le HTML (éviter de mélanger le php et l'HTML)

