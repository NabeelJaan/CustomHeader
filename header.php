<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>
<body>
    <header class="navbar-dark bg-primary">
        <div class="container site-menu">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <?php 
                        wp_nav_menu( 
                            array(
                                'menu_class'        => "nav navbar-nav m-auto",
                                'container'         => 'ul',
                                'depth'             => "0",
                                'theme_location'    => "primary"
                            ) 
                        );
                    ?>
                    <button class="btn login-btn my-2 my-sm-0" type="submit">Login</button>
                </div>
            </nav>
        </div>
    </header>