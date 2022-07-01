<?php 
session_start();
$title = "Profile";
include "../../config/config.php";
if($_SESSION == NULL){
    header('Location:'.$base_url.'page/user/login.php');
}else{
$profile = 'active nav-active';
include "../../template/navbar.php";
?>
<div class="container">
    <div class="col-lg-6 col-md-6 col mx-auto d-block">
        <div class="card my-5">
            <div class="card-header text-center">
                <h2>User Profile</h2>
            </div>
            <div class="card-body">
                Tes
            </div>
        </div>
    </div>
</div>
<?php } ?>