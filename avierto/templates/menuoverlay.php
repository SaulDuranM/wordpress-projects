<?php $dist_path = get_template_directory_uri() . '/dist/'; ?>
<div class="open-overlay-menu">
    <div class="logo-avierto">
        <a href="<?php echo get_home_url(); ?>"><img class="img-responsive" src="<?= $dist_path; ?>images/logo_avierto.png" alt="Logo Avierto"></a>
    </div>
    <nav>
        <div><a id="first-link" href="../contacto">Contacto</a></div>
        <div id="second-link" class="menu-btn">
            <div id="trigger-overlay" class="nav-open-menu">
                <a><span>MENU</span></a>
            </div>
        </div>
    </nav>
</div>
