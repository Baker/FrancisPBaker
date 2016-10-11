<?php 
require_once 'config.php';
?>
            <div class="menu">
                <div class="menu-bg js-blur"></div>
                <nav class="menu-items">
                    <a href="<?php print navonelink; ?>" class="menu-item">
                        <span class="js-blur"><?php print navonename; ?></span>
                    </a>
                    <a href="<?php print navtwolink; ?>" class="menu-item">
                        <span class="js-blur"><?php print navtwoname; ?></span>
                    </a>
                    <a href="<?php print navthreelink; ?>" class="menu-item">
                        <span class="js-blur"><?php print navthreename; ?></span>
                    </a>
                    <a href="<?php print navfourlink; ?>" class="menu-item">
                        <span class="js-blur"><?php print navfourname; ?></span>
                    </a>
                </nav>
            </div>
            <button class="menu-toggle"><span>Open Menu</span></button>