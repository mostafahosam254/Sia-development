<?php 
 
function admin()
{
if(isset($_SESSION['is_admin']) && $_SESSION['admin'] == true)
{
    return true;
}
return false;
}

function moazfen()
{
if(isset($_SESSION['moz']) && $_SESSION['moaz'] == true)
{
    return true;
}
return false;
}

function user()
{
    if(isset($_SESSION['is_user']) && $_SESSION['user'] == true){
        return true;
    }
    return false;
}



?>