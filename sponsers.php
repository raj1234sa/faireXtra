<?php
$brandclass = '';
if(isset($indexpage2) && $indexpage2 == true) {
    $brandclass = 'brand-index2';
}
?>
<div class="brand-list <?php echo $brandclass ?>">
    <div class="row no-gutters">
        <div class="col-12 brand-div">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <img src="images/andrew-porter.png" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/leadership.jpg" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/wallbridge.jpg" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/summit.png" class="img-fluid">
                </div>
                <div class="col">
                    <img src="images/phalen.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>