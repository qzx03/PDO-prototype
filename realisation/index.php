<link rel="stylesheet" href="style.css">

<?php

session_start();

require 'functions.php';

if(isset($_GET['reset'])){
resetsort();
}

$PDO = connection();

$_SESSION['filter'] = $_GET['category'] ?? $_SESSION['filter'] ?? NULL;
$_SESSION['search'] = $_GET['search'] ?? $_SESSION['search'] ?? NULL;
$_SESSION['sort'] = $_GET['sort'] ?? $_SESSION['sort'] ?? NULL;


$filtersql = sqlfilter($_SESSION['filter']);
$searchsql = sqlsearch($_SESSION['search'], $filtersql);
$sortsql = sqlsort($_SESSION['sort'], $searchsql);

$stmt = $PDO->query($sortsql);
$recipes = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

    <form action="index.php" method="GET">
    <label for="search">Search: </label>
    <input type="text" placeholder="search" name="search" id="search">
    <label for="category">Select category: </label>
    <select name="category" id="category">
        <option value="all">All</option>
        <option value="entree">Entree</option>
        <option value="main">Main</option>
        <option value="dessert">Dessert</option>
    </select>
    <label for="sort">Sort by: </label>
    <select name="sort" id="sort">
        <option value="nosort">No sort</option>
        <option value="mtime">Most time consuming</option>
        <option value="ltime">Least time consuming</option>
        <option value="newest">Newest</option>
        <option value="oldest">Oldest</option>
    </select>
    <input type="submit" value="Sort">
    <input type="submit" value="Reset" name="reset">

    </form>

<div class="recipe-container">

<?php

foreach($recipes as $recipe){
    echo "
    <div class='recipe-card'>
    <h4>ID: {$recipe['id']}</h4><br>
    <h1>{$recipe['r_name']}</h1><br>
    <img src='{$recipe['r_image']}' alt='image'><br>
    <p>Category: {$recipe['category']}</p><br>
    <p>Prep time: {$recipe['prep_time']}</p><br>
    <p>Created at: {$recipe['created_at']}</p><br>
    </div>
    ";
}
?>

</div>