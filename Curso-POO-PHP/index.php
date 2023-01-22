<?php
require_once './vendor/autoload.php';

use App\Models\User;
use App\Models\Admin;

 /*
 ? Polimorfismo
 */

$user = new User('Lalo', 34);
$admin = new Admin('Roberto', 12);

print_r([
    'user_name' => $user->greet(),
    'admin_name' => $admin->getAge()
]);


