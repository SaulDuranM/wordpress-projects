<?php

$path = $_GET['path'];
$image = $_GET['image'];
$headline = $_GET['headline'];
$desc = $_GET['desc'];


?>
<div id="pp-gallery1" class="pp-gallery-w">
    <div class="pp-gallery">
        <div class="text-w">
            <p class="date">28 JULY 2015</p>
            <h2><?= $headline; ?></h2>
            <p class="text__main"><?= $desc; ?></p>
        </div>
        <div class="img-w">
            <a href="#" class="btn-prev">
                <svg class="" role="img" title="share-fb"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg>
            </a>
            <a href="#" class="btn-next">
                <svg class="" role="img" title="share-fb"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-next-big"/></svg>
            </a>
            <img src="<?= $image; ?>" alt=""/>
        </div>
        <div class="tags-w clearfix">
            <div class="tags-left clearfix">
                <p class="tags__title">TAGS:</p>
                <ul class="tags__list">
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">Customers</a></li>
                </ul>
            </div>
            <div class="tags-right">
                <div class="share-w">
                    <p class="share__title">SHARE:</p>
                    <ul class="clearfix">
                        <li><a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-share-tw2"/></svg></a></li>
                        <li><a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-share-fb2"/></svg></a></li>
                        <li><a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-share-this2"/></svg></a></li>
                        <li><a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-share-in2"/></svg></a></li>
                    </ul>
                </div>
                <div class="print-w">
                    <p class="share__title">PRINT:</p>
                    <a href="#" class="print"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-print"/></svg></a>
                </div>
            </div>

        </div>
        <div class="dnlimg-w">
            <p class="title">DOWNLOAD IMAGE:</p>
            <div class="dnlimg">
                <div class="dnlimg__radio-row clearfix">
                    <input type="radio" name='payment1' id='radio-p2'><label for="radio-p2"><span></span>I have read and understand Terms and Conditions for image use*</label>
                </div>
                <div class="btns-w">
                    <a href="#" class="btn-round ">Low res (66Kb)
                        <svg class="icon-arr-down" role="img" title="share-fb"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-arr-down"/></svg>
                    </a>
                    <a href="#" class="btn-round ">High res (1.2Mb)
                        <svg class="icon-arr-down" role="img" title="share-fb"><use xlink:href="<?= $path; ?>images/general/svgdefs.svg#icon-arr-down"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>