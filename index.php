<h1>Web Application for CSE4500</h1>
<?php

// Read the JSON file
$json_file = file_get_contents('my_data.json');

// Decode the JSON file
$json_data = json_decode($json_file,true);

?>
//Name 
<h2>
    <?php echo $json_data['first-name']; ?>
    <span class="text-primary"><?php echo $json_data['last-name']; ?></span>
</h2>
<h3><?php echo $json_data['address']; ?></h3>
<h3><?php echo $json_data['phone']; ?></h3>
<h3><?php echo $json_data['email']; ?></h3>
<p><?php echo $json_data['introduction']; ?></p>

<h2>Skills</h2>

<?php foreach($json_data['experience'] AS $experience) { ?>
  <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
      <h3 class="mb-0"><?php echo $experience['title']; ?></h3>
      <div class="subheading mb-3"><?php echo $experience['employer']; ?></div>
      <p><?php echo $experience['description']; ?></p>
    </div>
    <div class="flex-shrink-0">
      <span class="text-primary"><?php echo $experience['period']; ?></span>
    </div>
  </div>

<?php  } ?>

<h2>Interest</h2>

<?php foreach($json_data['interests'] AS $interests) { ?>
  <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
      <h3 class="mb-0"><?php echo $interests['hobby']; ?></h3>
      <p><?php echo $interests['description']; ?></p>
    </div>
  </div>

<?php  } ?>
