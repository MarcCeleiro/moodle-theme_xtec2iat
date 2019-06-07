<?php

// Get the HTML for the settings bits.
$html = theme_xtec2_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <?php echo $html->importcss;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(isset($body_classes)?$body_classes:""); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
			<a href="http://ensenyament.gencat.cat/ca/inici" class="brand ensenyament"><img src="<?php echo $OUTPUT->image_url('departament', 'theme'); ?>" alt="Departament d'Educació"/></a>
			<a href="https://campus.insatorroja.cat" class="brand xtec hidden-phone"><img src="https://insatorroja.cat/logo.png" alt="Moodle de l'Institut Antoni Torroja"/></a>
            <div class="navbar">
			   <?php echo $OUTPUT->user_menu(); ?>
               <div class="nav-collapse collapse">
                  <?php echo $OUTPUT->custom_menu(); ?>
                  <ul class="nav pull-right">
                     <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                  </ul>
               </div>
            </div>
        </div>
    </nav>
</header>
<div id="title-header" class="clearfix hidden-phone">
    <div id="logo-top"></div>
    <div class="container-fluid">
        <?php echo $OUTPUT->page_heading(); ?>
    </div>
</div>

<div id="main_navigation" class="clearfix hidden-phone" style="min-height:36px;">
</div>

<div id="page" class="container-fluid clearfix">

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
            <?php echo $OUTPUT->main_content(); ?>
        </section>
    </div>
</div>
<footer id="page-footer">
    <div id="page-footer-top">
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </div>
    <div class="footerlogos clearfix container-fluid">
        <a href="http://moodle.org" target="_blank" class="moodle_footer"><img src="<?php echo $OUTPUT->image_url('logo_moodle', 'theme'); ?>" alt="Moodle" title="Moodle" /></a>
        <br/><br/>
        <i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/insatorroja/moodle-theme_xtec2iat" target="_blank">Codi font del tema del Campus a GitHub</a>
        <br/>
        <strong>© 2019 Institut Antoni Torroja.</strong> Disseny: Departament d'Educació i <a href="https://marcceleiro.com" target="_blank">Marc Celeiro</a>
        <br/>
        <br/>
    </div>
</footer>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
