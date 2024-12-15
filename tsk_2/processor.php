<?php

$subject = $_GET['subject'];

// print_r($subject);
?>

<div style="display: flex; justify-content: center; align-items: center;">
    <div style="display: block;">
<h1 class=" heading">Selected Subjects</h1>
<ul>
    <?php
    foreach($subject as $sub){
        echo "<li>$sub</li>";
    }
    ?>
</ul>

    </div>
</div>