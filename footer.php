<footer>
    <div class="footer">
        <div class="footerstart">
            <div class="Fcontainer">
                <div class="fabout">
                    <h2>About Us</h2>
                    <div class="ftext">
                        Lorem ipsum dolor sit amet...
                    </div>
                </div>
                <div class="fuseful">
                    <h2>Useful Links</h2>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'container' => false
                        ));
                    ?>
                </div>
                <div class="fservices">
                    <h2>Our Services</h2>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'container' => false
                        ));
                    ?>
                </div>
                <div class="fcontact">
                    <h2>Contact Us</h2>
                    <form class="footer-contact-form" action="#" method="post">
                        <input type="text" name="name" placeholder="Your Name" required><br>
                        <input type="email" name="email" placeholder="Your Email" required><br>
                        <textarea name="message" placeholder="Your Message" required></textarea><br>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
