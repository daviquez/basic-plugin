<?php
/**
 * Plugin Name: Pulgin Basics
 * Author: David V
 * Description: Minimal requirements for a plugin
 */

// Add action in the admin menu
add_action('admin_menu', function(){
    //  Function to add the plugin to the sidebar
     add_menu_page(
         //<title>Plugin Title</title>
         'Page Title', 
         // Title in the dashboard
         'Menu Title',
         // user capability needed to be displayed
         0,
         // This one should be unique
         'plugin-slug',
         // Render
         function(){
            echo 'Here you can code whatever you want.';
            ?>
                <div class="wrap">
                    <h1>Example</h1>

                    <div class="card">
                        <h2 class="title">Card Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit, ea distinctio error exercitationem ab dicta at, accusamus laboriosam officiis ipsum.</p>
                        <button class="button button-primary">Save button</button>
                    </div>
                </div>
            <?php
         }
     );
 });
