<?php
include_once "_header.php";
include_once "model.php";
include_once "newUs.php";

$user = new UserProfile;
if($newUser->_name!="TestName")
{
    $user=$newUser;
}
?>
<main>
<div class="container">

<div class="alert alert-secondary" role="alert">
  Your profile information:  <?php echo $user->_name ?>
</div>

<ul class="list-group list-group-flush">
  <li class="list-group-item"><b>User name:</b>  <?php echo $user->_name ?></li>
  <li class="list-group-item"><b>User surname:</b> <?php echo $user->_surname ?> </li>
  <li class="list-group-item"><b>User birdthday:</b> <?php echo $user->_birdthday ?> </li>
  <li class="list-group-item"><b>User email:</b> <?php echo $user->_email ?></li>
  <li class="list-group-item"><b>User phone:</b> <?php echo $user->_phone ?></li>
  <li class="list-group-item"><b>User city:</b> <?php echo $user->_city ?></li>
  <li class="list-group-item"><b>User login:</b> <?php echo $user->_login ?> </li>
  <li class="list-group-item"><b>User password:</b> <?php echo $user->_password ?> </li>
</ul>

</div>

</main>
    
<?php
include_once "_footer.php";
?>