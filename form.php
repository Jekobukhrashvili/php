<?php
var_dump($_POST);

if ($_POST['password'] == $_POST['confirm_password']) {
  echo $_POST['name'] . ", Welcome!";
  echo " Registration completed successfully.";
}
  else {
    echo $_POST['name'] . ", Sorry!";
    echo " Password and Confirm Password does not match!";
}