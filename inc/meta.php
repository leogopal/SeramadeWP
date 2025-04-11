<?php
add_filter( 'rwmb_meta_boxes', 'protaxllc_cs_fields' );

function protaxllc_cs_fields( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'fields'     => [
            [
                'name'              => __( 'Rendition', 'protaxllc' ),
                'id'                => $prefix . 'Property-Rendition',
                'type'              => 'text',
                'label_description' => __( 'Enter the property rendition identifier', 'protaxllc' ),
                'placeholder'       => __( '12345P', 'protaxllc' ),
                'required'          => true,
                'columns'           => 4,
                'hide_from_rest'    => false,
                'hide_from_front'   => false,
                'limit_type'        => 'character',
            ],
            [
                'name'              => __( 'Total Tax Savings', 'protaxllc' ),
                'id'                => $prefix . 'total_tax_savings',
                'type'              => 'text',
                'label_description' => __( 'Enter the total tax savings', 'protaxllc' ),
                'placeholder'       => __( '1,00,000', 'protaxllc' ),
                'required'          => true,
                'prepend'           => __( '$ ', 'protaxllc' ),
                'admin_columns'     => [
                    'position'   => 'after title',
                    'title'      => __( 'Savings', 'protaxllc' ),
                    'sort'       => true,
                    'filterable' => true,
                    'link'       => 'edit',
                ],
                'columns'           => 4,
                'hide_from_rest'    => false,
                'hide_from_front'   => false,
                'class'             => 'currency-usd',
                'limit_type'        => 'character',
            ],
            [
                'name'              => __( 'Total Reduction', 'protaxllc' ),
                'id'                => $prefix . 'total_reductions',
                'type'              => 'text',
                'label_description' => __( 'Enter the total tax reductions', 'protaxllc' ),
                'placeholder'       => 100000,
                'prepend'           => __( '$ ', 'protaxllc' ),
                'columns'           => 4,
                'hide_from_rest'    => false,
                'hide_from_front'   => false,
                'limit_type'        => 'character',
            ],
            [
                'name'              => __( 'County', 'protaxllc' ),
                'id'                => $prefix . 'county',
                'type'              => 'taxonomy',
                'label_description' => __( 'County', 'protaxllc' ),
                'desc'              => __( 'Select California County for Case Study', 'protaxllc' ),
                'taxonomy'          => ['case-study-county'],
                'field_type'        => 'select',
                'add_new'           => false,
                'remove_default'    => false,
                'columns'           => 6,
                'hide_from_rest'    => false,
                'hide_from_front'   => false,
                'class'             => 'cs-county',
            ],
            [
                'name'            => __( 'ACT Link', 'protaxllc' ),
                'id'              => $prefix . 'act_link',
                'type'            => 'url',
                'hide_from_rest'  => false,
                'hide_from_front' => false,
            ],
        ],
        'title'      => __( 'Case Study Fields', 'protaxllc' ),
        'id'         => 'cs_fields',
        'modified'   => 1744400590,
        'post_types' => ['case-study'],
        'closed'     => false,
        'revision'   => true,
        'tab_style'  => 'default',
        'class'      => 'cs-meta-fields',
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'protaxllc_team_meta' );

function protaxllc_team_meta( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'fields'     => [
            [
                'name'            => __( 'Position', 'protaxllc' ),
                'id'              => $prefix . 'position',
                'type'            => 'text',
                'required'        => true,
                'columns'         => 4,
                'hide_from_rest'  => false,
                'hide_from_front' => false,
                'limit_type'      => 'character',
            ],
        ],
        'title'      => __( 'Team Member Fields', 'protaxllc' ),
        'id'         => 'team-member-fields',
        'modified'   => 1744400616,
        'post_types' => ['team-member'],
        'style'      => 'seamless',
        'closed'     => false,
        'revision'   => true,
        'tab_style'  => 'default',
    ];

    return $meta_boxes;
}