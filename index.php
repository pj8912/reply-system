<?php

require_once 'vendor/autoload.php';

use Reply\Template;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
Template::main_header('Reply');
?>
<div class="container">

<div class="card card-body col-md-6 mt-5 m-auto">

<a href="upload.php" class="btn btn-primary">Create Post </a>

</div>

</div>

<?php
Template::main_footer();
?>

