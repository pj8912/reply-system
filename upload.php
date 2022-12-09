<?php
require 'vendor/autoload.php';
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Reply\Models\PostModel;
use Reply\Database\Database;
use Reply\Template;

//header
Template::main_header('post');
?>
<div class="container">

<div class="mt-5 card card-body m-auto col-md-6">
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">

<div class="mb-2">
<input placeholder="Title" name="ptitle" class="form-control">
</div>


<div class="mb-2">
<textarea class="form-control" name="pbody" placeholder="Post Body"></textarea>
</div>

<div class="d-grid gap-2">
	<button name="ubtn" class="btn btn-primary" type="submit">
		Upload Post
	</button>
</div>
</form>

</div>

</div>

<?php
Template::main_footer();
?>


<?php

if(isset($_POST['ubtn'])){
	$title = $_POST['ptitle'];
	$body = $_POST['pbody'];

	$db = new Database();
	$db = $db->connect();
	$postModel = new PostModel($db);

	$postModel->title = $title;
	$postModel->body = $body;

	if($postModel->createPost()){
		header('Location: index.php');
		exit();
	}
	
}

?>

