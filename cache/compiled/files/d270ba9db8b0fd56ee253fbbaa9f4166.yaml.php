<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/morley/user/themes/quark/blueprints/modular/text2.yaml',
    'modified' => 1526725473,
    'data' => [
        'title' => 'modular text 2',
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
                                'header.custom.coverImage' => [
                                    'type' => 'file',
                                    'label' => 'Cover image',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.custom.headline1' => [
                                    'type' => 'text',
                                    'label' => 'Headline 1'
                                ],
                                'header.custom.textField1' => [
                                    'type' => 'text',
                                    'label' => 'Custom text field1'
                                ],
                                'header.custom.author1' => [
                                    'type' => 'text',
                                    'label' => 'author'
                                ],
                                'header.custom.Teaserbox1' => [
                                    'type' => 'mediapicker',
                                    'folder' => 'self@',
                                    'label' => 'Select a file',
                                    'preview_images' => true
                                ],
                                'header.custom.headline2' => [
                                    'type' => 'text',
                                    'label' => 'Headline 2'
                                ],
                                'header.custom.textField2' => [
                                    'type' => 'text',
                                    'label' => 'Custom text field2'
                                ],
                                'header.custom.author2' => [
                                    'type' => 'text',
                                    'label' => 'author 2'
                                ],
                                'header.custom.Teaserbox2' => [
                                    'type' => 'mediapicker',
                                    'folder' => 'self@',
                                    'label' => 'Select a file',
                                    'preview_images' => true
                                ],
                                'header.custom.headline3' => [
                                    'type' => 'text',
                                    'label' => 'Headline 3'
                                ],
                                'header.custom.textField3' => [
                                    'type' => 'text',
                                    'label' => 'Custom text field3'
                                ],
                                'header.custom.author3' => [
                                    'type' => 'text',
                                    'label' => 'author 3'
                                ],
                                'header.custom.Teaserbox3' => [
                                    'type' => 'mediapicker',
                                    'folder' => 'self@',
                                    'label' => 'Select a file',
                                    'preview_images' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
