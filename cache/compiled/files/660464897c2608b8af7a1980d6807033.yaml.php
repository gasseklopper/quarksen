<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/morley/user/themes/quark/blueprints/details.yaml',
    'modified' => 1526127300,
    'data' => [
        'title' => 'Page Content',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Choose a color'
                                ],
                                'header.custom.textField' => [
                                    'type' => 'text',
                                    'label' => 'Custom text field'
                                ],
                                'header.custom.coverImage' => [
                                    'type' => 'file',
                                    'label' => 'Cover image',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
