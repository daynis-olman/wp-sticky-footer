<?php
/**
 * Plugin Name: Sticky Phone Call & Book Assessment Footer
 * Description: This plugin adds a custom-made sticky footer on mobile devices only. The footer is displayed across all pages and displays "Call us" & "Book free assessment" buttons. Click interactions for both buttons are sent to Google Analytics using gtag.js
 * Version: 1.0
 * Author: Daynis Olman
 */

function sticky_footer_plugin_scripts() {
    ?>
    <!-- Sticky Footer HTML -->
    <div id="sticky-footer-container">
        <a href="tel:+14165193599" class="sticky-footer-button" id="call-now-button">
            <!-- SVG for Call Now -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="button-icon"><path d="M27.01355,23.48859...Z" fill="#ffffff"/></svg>
            Call Now
        </a>
        <div class="sticky-footer-spacer"></div>
        <a href="/personal-training" class="sticky-footer-button" id="book-assessment-button">
            <!-- SVG for Book Free Assessment -->
            <svg class="button-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 9H21M9 15L11 17L15 13M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 ...Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Book Free Assessment
        </a>
    </div>

    <style>
        #sticky-footer-container {
            display: none;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
            background-color: #333; /*  background color */
        }

        .sticky-footer-button {
            text-decoration: none;
            color: white;
            background-color: #009900;
            font-weight: 600;
            text-align: center;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            padding: 0 15px; /* padding for text and icon spacing */
            font-family: "Roboto", Sans-serif;
        }

        .button-icon {
            height: 24px; /*  icon size */
            width: 24px;
            margin-right: 8px;
        }

        .sticky-footer-spacer {
            width: 10px; /*  spacer width */
        }

        @media (max-width: 767px) {
            #sticky-footer-container {
                display: flex;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var callNowButton = document.getElementById('call-now-button');
            var bookAssessmentButton = document.getElementById('book-assessment-button');

            callNowButton.addEventListener('click', function() {
                gtag('event', 'click', {
                    'event_category': 'Button',
                    'event_label': 'Call Now'
                });
            });

            bookAssessmentButton.addEventListener('click', function() {
                gtag('event', 'click', {
                    'event_category': 'Button',
                    'event_label': 'Book Assessment'
                });
            });
        });
    </script>
    <?php
}

add_action('wp_footer', 'sticky_footer_plugin_scripts');
