    
    
    
    <div id="sidebar-1" class="sidebar">
        
        <div class="sidebar-logo">

            <?php 
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
            ?>
            <p>La boulangerie du Village</p>
            
        </div>
        
        <?php dynamic_sidebar('sidebar-1'); ?>

    </div>