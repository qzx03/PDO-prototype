<?php
function connection(){
    $host = 'localhost';
    $dbname = 'recipesREALISATION';
    $username = 'root';
    $password = '';

    try{
        $PDO = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;

    }catch(PDOException $e){
        echo "connection error: " . $e->getMessage();
        return NULL;
    }
}


function sqlfilter($filter){
    if($filter == "all" || $filter == NULL){
        return "SELECT * FROM recipes";
    }elseif($filter == "entree"){
        return "SELECT * FROM recipes WHERE category = 'entree'";
    }elseif($filter == "main"){
        return "SELECT * FROM recipes WHERE category = 'main'";
    }elseif($filter == "dessert"){
        return "SELECT * FROM recipes WHERE category = 'dessert'";
    }


}


function sqlsearch($search, $filtersql){
    if($search == NULL){
        return $filtersql;
    }else{
        $connector = (stripos($filtersql, "WHERE") !== false) ? 'AND' : 'WHERE';
        return $filtersql . " " . $connector . " r_name LIKE '%$search%'";
    }
}


function sqlsort($sort, $searchsql){

    if($sort == "nosort" || $sort == NULL){
        return $searchsql;
    }elseif($sort == "mtime"){
        return $searchsql . " ORDER BY prep_time DESC";
    }elseif($sort == "ltime"){
        return $searchsql . " ORDER BY prep_time ASC";
    }elseif($sort == "newest"){
        return $searchsql . " ORDER BY created_at DESC";
    }elseif($sort == "oldest"){
        return $searchsql . " ORDER BY created_at ASC";
    }
}


function resetsort(){
    unset($_SESSION['filter']);
    unset($_SESSION['search']);
    unset($_SESSION['sort']);
}
?>