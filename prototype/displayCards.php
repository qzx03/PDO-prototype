<?php
require 'connection.php';

echo "<style>
    body{
        display: flex;
    }
</style>";

try{
    $sql = "SELECT * FROM recipes";
    $stmt = $PDO->query($sql);

    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($recipes as $recipe){
        echo '<div style="border: 1px black solid;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius: 8px;padding: 20px;width: 300px;height: 600px;overflow-y: auto">
                ID: ' . $recipe['id'] . ' <br>
                name: ' . $recipe['r_name'] . ' <br>
                <img src="' . $recipe['r_image'] . '" alt="image" style="width: 200px"><br>
                category: ' . $recipe['category'] . ' <br>
                preparation time: ' . $recipe['preparation_time'] . ' <br>
                created at: ' . $recipe['created_at'] . ' <br>
                edited at: ' . $recipe['edited_at'] . ' <br>
            </div>';
    }
}catch(PDOException $e){
    echo"Error: ". $e->getMessage();
}




?>