<?php
$connection = mysqli_connect('localhost', 'user_web1', 'web1', 'web1');
if (!$connection) {
  echo "ops! tente novamente";
}

