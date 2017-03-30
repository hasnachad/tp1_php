<?php

App::getInstance()->getTable('Service')->delete($_POST['id']);

header('location: admin.php?p=services');