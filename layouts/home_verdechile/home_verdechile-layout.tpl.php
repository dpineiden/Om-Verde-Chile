<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
	  <div class="l-principal" role="principal">
	      <?php print render($page['principal']); ?>
	  </div>
    <div class="l-om-branding" role="logo-marca">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo" role="logo-sitio"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name" role="marca">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>
 
  </header> 

  <div class="l-main">

	  
	<div class="l-nav" role="navegacion">
		<?php print render($page['navigation']); ?>
	</div>
		
	<div class="l-slider" role="slider">
	   <?php print render($page['slider']); ?>
	</div>
	<div class="l-region--destacado" role="destacado">
      <?php print render($page['highlighted']); ?></div>
  <div class="l-region--breadcrumb" role="breadcrumb">
      <?php print $breadcrumb; ?>  
  </div>
  <div class="l-content" role="main">
        
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
    <div class="l-sidebar-first" role="Barra Lateral">
    <?php print render($page['sidebar_first']); ?></div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
