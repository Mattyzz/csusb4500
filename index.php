<h1>Web Application for CSE4500</h1>
<?php

// Read the JSON file
$json_file = file_get_contents('my_data.json');

// Decode the JSON file
$json_data = json_decode($json_file,true);

?>
<!-- Name --!>
<h1>
    <?php echo $json_data['first-name']; ?>
    <span class="text-primary"><?php echo $json_data['last-name']; ?></span>
</h1>
<h2>Skills</h2>
<h2>Interest</h2>
