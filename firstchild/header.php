<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

    <header class="p-5 flex-wrap bg-slate-500">
      
    <div class="m-auto md:max-w-[1300px] flex justify-between ">

    <div class="navbar bg-slate-100 rounded py-3">
        <div class="navbar-start w-[80%] md:w-[50%]">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                        'container' => 'nav',
                    ));
                ?>
                </ul>
                </div>
                <a href="<?php echo home_url(); ?>"><?php the_custom_logo()?></a>
            </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'navbar-center hidden lg:flex',
                        'menu_class' => 'menu menu-horizontal px-1 text-base',
                    ));
                ?>
        <div class="navbar-end w-[35%] md:w-[50%]">
    <a class="btn">Prenota ora</a>
  </div>
</div>

    </header>

    <div class="m-auto">
        
    
