<?php
$con= mysqli_connect("localhost", "root", "pass", "oms");

if(isset($_POST['id']))
{
    mysqli_query($con,"delete from events where id='{$_POST['id']}'");
}
