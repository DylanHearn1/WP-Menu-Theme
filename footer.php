<?php
/*
 * Template Name: Footer
 */

?>

<footer>
    <div class="bg-black text-white">
        <div class="w-75 m-auto align-items-center justify-content-between py-5" id="footer-content">
            <ul class="footer-address py-4">
                <li class="fw-bold">Contact Us</li>
                <li>123 Main Street, Cityville</li>
                <li>Email: home@chef.com</li>
                <li>Phone: +1 (555) 123-4567</li>
            </ul>
            <?php
            wp_nav_menu(
                array(
                    'footer-nav' => 'footer links',
                    'container' => '',
                    'theme_location' => 'footer-nav',
                )
            )
                ?>
            <p class="py-4">
                Follow us @homechef
            </p>
        </div>
    </div>
</footer>


</body>

</html>