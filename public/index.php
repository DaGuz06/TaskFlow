<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio";

    $userName = "Lolo Calvo"; // Tipo String
    $userAge = 35;             // Tipo Integer
    $isPremiumUser = true;     // Tipo Boolean

    $tasks = [

        ["title" => "Programar", "completed" => false, "priority" => "alta"],
        ["title" => "Reunión", "completed" => false, "priority" => "media"],
        ["title" => "Descansar", "completed" => false, "priority" => "alta"]        
    ];
?>




<include /app/views/header.php; ?>

<ul>
    <?php
    foreach ($tasks as $task) {
        $taskClasses = "task-item";
        if ($task["completed"]) {
            $taskClasses .= " completed";
        }
        echo "<li class='{$taskClasses}'>";
        echo "<strong>" . $task["title"] . "</strong> - Prioridad: " . $task["priority"];
        echo "</li>";
    }
    ?>
</ul>

<include 'app/views/footer.php'; ?>