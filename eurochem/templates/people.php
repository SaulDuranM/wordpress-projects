<?php

define('WP_USE_THEMES', false);
require('../../../../wp-load.php');
$id=$_GET['id'];



$p = $_GET['path'];
$m = $_GET['member'];
$psplit=split("[|]",$p);
$msplit=split("[,]",$m);

?>

<div id="board-gallery1" class="board-gallery-w">
    <div class="board-gallery">
        <div class="text-w">
            <h2><?= $psplit[1]; ?></h2>
            <p class="text__main"><?= $psplit[2]; ?></p>
        </div>
        <div class="img-w">
            <a href="#" class="btn-prev">
                <svg class="" role="img" title="share-fb">
                    <use xlink:href="<?= $psplit[0]; ?>images/general/svgdefs.svg#icon-prev-big"/>
                </svg>
            </a>
            <a href="#" class="btn-next">
                <svg class="" role="img" title="share-fb">
                    <use xlink:href="<?= $psplit[0]; ?>images/general/svgdefs.svg#icon-next-big"/>
                </svg>
            </a>
            <img src="<?= $psplit[3]; ?>" alt=""/>
        </div>
        <div class="tags-w clearfix">
            <div class="tags-left clearfix">
                <ul class="tags__list">
                    <?php 
                    foreach ($msplit as $mem) {
                        if($mem){
                    ?>
                    <li><a href="#"><?= $mem; ?></a></li>
                    <?php
                        }    
                    }    
                    ?>
                    
                </ul>
            </div>
            <div class="tags-right">
                <div class="print-w">
                    <p class="share__title">PRINT:</p>
                    <a href="#" class="print">
                        <svg role="img" title="share-fb" class="icon">
                            <use xlink:href="<?= $psplit[0]; ?>images/general/svgdefs.svg#icon-print"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
        <div class="description">
            <div class="description-i">
                <h2>Biography</h2>
                <p><?= $psplit[4]; ?></p>
            </div>
        </div>
    </div>
</div>