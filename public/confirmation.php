<?php
session_start();

foreach ($_SESSION['contacts'] as $contact){
    echo $contact["name"].' '.$contact["age"].'<br>';
}
