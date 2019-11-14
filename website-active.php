<?php

include 'db.php';
session_start();


echo $_SESSION['id'];

$sql="INSERT INTO webshow(user_id, about, gallery, team, blog, service) VALUES ('".$_SESSION['id']."','1','1','1','1','1')";

$res=$conn->query($sql);

$sql2="INSERT INTO homepage(user_id, bannermaintext, bannertext, buttontext, buttonhref) VALUES ('".$_SESSION['id']."','1','1','1','1');";
$res2=$conn->query($sql2);

header('location: home.php');



?>