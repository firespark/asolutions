<?php
$separator = ($isFrontPage) ? '' : '/';
?>

            <nav class="nav">
                <a class="nav__link" href="<?php echo $separator;?>#catalog"><?php _e('Catalog', 'asolutions');?></a>
                <a class="nav__link company-information-link" href="<?php echo $separator;?>#about-company"><?php _e('About', 'asolutions');?></a>
                <a class="nav__link contacts-link" href="<?php echo $separator;?>#contacts"><?php _e('Contacts', 'asolutions');?></a>
                <!--<svg class="user-icon" width="16" height="20" viewBox="0 0 16 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 0.25C5.65279 0.25 3.75 2.15279 3.75 4.5C3.75 6.84721 5.65279 8.75 8 8.75C10.3472 8.75 12.25 6.84721 12.25 4.5C12.25 2.15279 10.3472 0.25 8 0.25ZM5.25 4.5C5.25 2.98122 6.48122 1.75 8 1.75C9.51878 1.75 10.75 2.98122 10.75 4.5C10.75 6.01878 9.51878 7.25 8 7.25C6.48122 7.25 5.25 6.01878 5.25 4.5Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 10.75C3.71979 10.75 0.25 14.2198 0.25 18.5V19.75H15.75V18.5C15.75 14.2198 12.2802 10.75 8 10.75ZM8 12.25C11.3681 12.25 14.1139 14.9141 14.2451 18.25H1.75491C1.88613 14.9141 4.63195 12.25 8 12.25Z"
                        fill="white" />
                </svg>-->
            </nav>