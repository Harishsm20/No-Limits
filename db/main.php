<?php
$_home = '/PTAC';
$http = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
if ($_SERVER['HTTP_HOST'] == "localhost") {
    $_path = $http . $_SERVER['HTTP_HOST'] . $_home;
} else {
    $_path = $http . $_SERVER['HTTP_HOST'] . '/PTAC';
}

function checkSession()
{
    session_name("NoLimits");
    session_start();
    $path = $GLOBALS['_path'];
    if (!isset($_SESSION['auth-state'])) {
        return true;
    }

}
function checkRole($allowedRolesStr, $userRole) {
    $path = $GLOBALS['_path'];
    $allowedRoles = array_map('intval', explode('-', $allowedRolesStr));
    if (in_array($userRole, $allowedRoles)) {
      // User has an allowed role, return true
      return true;
    } else {
      // User does not have an allowed role, redirect to error page
      http_response_code(404);
        header("Location: $path/404.html");
      exit();
    }
  }