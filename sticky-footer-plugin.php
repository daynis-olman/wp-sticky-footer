<?php
/**
 * Plugin Name: Book Assessment Footer & Call now Button
 * Description: Adds a custom-made sticky footer on mobile devices. Displays "Call Us" & "Book Free Assessment" buttons. Click interactions are tracked via Google Analytics.
 * Version: 1.0
 * Author: Daynis Olman
 */

function sticky_footer_plugin_scripts() {
    ?>
    <!-- Sticky Footer HTML -->
    <div id="sticky-footer-container" style="display: none; position: fixed; left: 0; bottom: 0; width: 100%; justify-content: center; align-items: center; padding: 0 10px; background-color: #333; z-index: 10000;">
        <!-- Call Now Button -->
        <a href="tel:+14165193599" class="sticky-footer__button" id="call-now-button" style="...styles...">
            <!-- SVG for Call Now -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="sticky-footer__icon" style="...styles...">
                <!-- SVG Path -->
            </svg>
            Call Now
        </a>
        <div class="sticky-footer__spacer" style="width: 10px;"></div>
        <!-- Book Assessment Button -->
        <a href="#" class="sticky-footer__button" id="book-assessment-button" style="...styles...">
            <!-- SVG for Book Free Assessment -->
            <svg class="sticky-footer__icon" style="...styles..." viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG Path -->
            </svg>
            Book Free Assessment
        </a>
    </div>

    <script>
        window.onload = function() {
            var callNowButton = document.getElementById('call-now-button');
            var bookAssessmentButton = document.getElementById('book-assessment-button');

            callNowButton.addEventListener('click', function() {
                gtag('event', 'click', {
                    'event_category': 'Button',
                    'event_label': 'Call Now'
                });
                console.log('Success: Event logged for "Call Now" button click');
            });

            bookAssessmentButton.addEventListener('click', function() {
                gtag('event', 'click', {
                    'event_category': 'Button',
                    'event_label': 'Book Assessment'
                });
                console.log('Success: Event logged for "Book Assessment" button click');
            });

            // Only show the footer on mobile devices
            if (window.innerWidth <= 767) {
                document.getElementById('sticky-footer-container').style.display = 'flex';
            }
        };
    </script>
    <?php
}

add_action('wp_footer', 'sticky_footer_plugin_scripts');
?>
