<?php
/**
 * Plugin Name: Sticky Phone call & Book Assessment Footer
 * Description: This plugin adds custom-made sticky footer on mobile devices only. The footer is to be displayed across all pages and display "Call us" & "Book free assessment" buttons. Click interactions for both buttons are sent to Google analytics using gtag.js
 * Version: 1.0
 * Author: Daynis Olman
 */

function sticky_footer_plugin_scripts() {
    ?>
    <!-- Sticky Footer HTML -->
    <div id="sticky-footer">
        <div id="sticky-footer">
    <a href="tel:+14165193599" class="footer-button" id="call-now-button">
        <!-- SVG for Call Now -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M27.01355,23.48859l-1.753,1.75305a5.001,5.001,0,0,1-5.19928,1.18243c-1.97193-.69372-4.87335-2.36438-8.43848-5.9295S6.387,14.028,5.6933,12.05615A5.00078,5.00078,0,0,1,6.87573,6.85687L8.62878,5.10376a1,1,0,0,1,1.41431.00012l2.828,2.8288A1,1,0,0,1,12.871,9.3468L11.0647,11.153a1.0038,1.0038,0,0,0-.0821,1.32171,40.74278,40.74278,0,0,0,4.07624,4.58374,40.74143,40.74143,0,0,0,4.58374,4.07623,1.00379,1.00379,0,0,0,1.32171-.08209l1.80622-1.80627a1,1,0,0,1,1.41412-.00012l2.8288,2.828A1.00007,1.00007,0,0,1,27.01355,23.48859Z" fill="#ffffff"/></svg>
        Call Now
    </a>
    <div class="spacer"></div>
    <a href="/personal-training" class="footer-button" id="book-assessment-button">
        <!-- SVG for Book Free Assessment -->
        <svg class="button-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 9H21M9 15L11 17L15 13M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
         Book Free Assessment
    </a>
</div>

    </div>

    <style>
        #sticky-footer {
    display: none;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 10px;
}

.button-icon {
    margin-right: 8px;
}

.footer-button {
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
    margin: 0 5px; /* Equal margin on both sides */
    font-family: "Roboto", Sans-serif;
}

#call-now-button {
    flex-grow: 1;
    max-width: 25%;
}

#book-assessment-button {
    flex-grow: 3;
    max-width: 70%;
}

.spacer {
    width: 5%;
    height: 60px;
}

#call-now-button svg {
    height: 24px;
    width: 24px;
    margin-right: 5px;
}

@media (max-width: 767px) {
    #sticky-footer {
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
            'event_label': 'Green Phonecall'
        });
    });

    bookAssessmentButton.addEventListener('click', function() {
        gtag('event', 'click', {
            'event_category': 'Button',
            'event_label': 'Green Assessment'
        });
    });
});

    </script>
    <?php
}

add_action('wp_footer', 'sticky_footer_plugin_scripts');
