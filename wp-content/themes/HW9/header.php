

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
<header id="header">
	<nav class="navbar navbar-default navbar-skokov">
		<div class="container">
			<div class="navbar-header navbar-header-skokov">
				<button type="button" class="navbar-toggle collapsed btn-collapsed-skokov" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class=" brand-skokov" >
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('logo_image'); ?>" alt="Skokov"/></a>
				</div>

			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php wp_nav_menu( array('theme_location'=>'menu1',
                                         'menu_class'=>'nav navbar-nav navbar-right nav-skokov',
                    ));?>
			</div>

		</div>
	</nav>
</header>
