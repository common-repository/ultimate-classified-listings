<?php
    $inputFields = array(
        array(
            'key' => 'regular_price',
            'type' => 'price',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-currency-dollar',
            'title' => __( 'Price', 'ultimate-classified-listings' ),
            'help' => __( 'Price for the listing', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'purpose',
            'type' => 'select',
            'tab' => 'details',
            'options' => array(
                __( 'Sell', 'ultimate-classified-listings' ),
                __( 'Rent', 'ultimate-classified-listings' ),
            ),
            'default' => '',
            'icon' => 'bi bi-building',
            'title' => __( 'Purpose', 'ultimate-classified-listings' ),
            'help' => __( 'Visual condition of the element', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'condition',
            'type' => 'select',
            'tab' => 'details',
            'options' => array(
                __( 'New', 'ultimate-classified-listings' ),
                __( 'Used', 'ultimate-classified-listings' ),
                __( 'Normal', 'ultimate-classified-listings' ),
            ),
            'default' => '',
            'icon' => 'bi bi-moon-stars',
            'title' => __( 'Condition', 'ultimate-classified-listings' ),
            'help' => __( 'Visual condition of the element', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'build_date',
            'type' => 'date',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-calendar-day',
            'title' => __( 'Build Date', 'ultimate-classified-listings' ),
            'help' => __( 'Build date of the element', 'ultimate-classified-listings' ),
        ),

        array(
            'key' => 'model',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-app-indicator',
            'title' => __( 'Model', 'ultimate-classified-listings' ),
            'help' => __( 'Model of the element', 'ultimate-classified-listings' ),
        ),

        array(
            'key' => 'listing_country',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-map',
            'title' => __( 'Country', 'ultimate-classified-listings' ),
            'help' => __( 'Country', 'ultimate-classified-listings' ),
        ),

        array(
            'key' => 'listing_city',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-geo',
            'title' => __( 'City', 'ultimate-classified-listings' ),
            'help' => __( 'City', 'ultimate-classified-listings' ),
        ),

        array(
            'key' => 'listing_address',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-geo-alt',
            'title' => __( 'Address', 'ultimate-classified-listings' ),
            'help' => __( 'Provide street address', 'ultimate-classified-listings' ),
        ),

        array(
            'key' => 'listing_zipcode',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'icon' => 'bi bi-bounding-box',
            'title' => __( 'Zip Code', 'ultimate-classified-listings' ),
            'help' => __( 'Zipcode', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'listing_features',
            'type' => 'checkboxes',
            'tab' => 'features',
            'default' => '',
            'options' => array(
                __( '1 Year international warranty', 'ultimate-classified-listings' ),
                __( 'Air Conditioning', 'ultimate-classified-listings' ),
                __( 'Power Locks', 'ultimate-classified-listings' ),
                __( 'Power Windows', 'ultimate-classified-listings' ),
                __( 'Mobile Controlled Gates', 'ultimate-classified-listings' ),
                __( 'Keyless entry', 'ultimate-classified-listings' ),
                __( 'Best Market Price', 'ultimate-classified-listings' ),
            ),
            'icon' => 'bi bi-boxes',
            'title' => __( 'Features', 'ultimate-classified-listings' ),
            'help' => __( 'Choose appropriate features', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'listing_video',
            'type' => 'video',
            'tab' => 'video',
            'default' => '',
            'icon' => 'bi bi-play-btn',
            'title' => __( 'Video URL', 'ultimate-classified-listings' ),
            'help' => __( 'Provide video URL', 'ultimate-classified-listings' ),
        ),
        array(
            'key' => 'listing_ribbon',
            'type' => 'text',
            'tab' => 'details',
            'default' => '',
            'accessibility' => 'admin',
            'icon' => '',
            'title' => __( 'Ribbon Text', 'ultimate-classified-listings' ),
            'help' => __( 'Provide text for the ribbon', 'ultimate-classified-listings' ),
        ),
    );
?>