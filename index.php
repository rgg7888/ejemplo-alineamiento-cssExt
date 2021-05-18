<?php

require_once __DIR__ . '/vendor/autoload.php';

page([
    'idioma' => 'en',
    'head' => [
        css([
            sye([
                'import' => "https://fonts.googleapis.com/css2?family=Lato&display=swap"
            ]),
            sye([
                'display' => 'grid',
                'grid-template-columns' => 'repeat(3, 1fr)',
                'grid-gap' => '5px',
                'font-family' => '"Lato", sans-serif',
                'width' => '550px'
            ],".wrapper"),
            sye([
                'background' => 'turquoise',
                'width' => '180px',
                'height' => '180px'
            ],".container"),
            sye([
                'width' => '60px',
                'height' => '60px',
                'text-align' => 'center',
                'padding-top' => '10px',
                'box-sizing' => 'border-box'
            ],".element",10),
            sye([
                'background',
                'papayawhip',
                'papayawhip',
                'papayawhip',
                'pink',
                'pink',
                'pink',
                'lightcyan',
                'lightcyan',
                'lightcyan'
            ],".element",10,true)
        ])
    ],
    'body' => [
        'contenido' => [
            _div([
                'class' => 'wrapper'
            ],[
                _div(['class' => 'container'],[
                    div("top left",['class' => 'element1'])
                ]),
                _div(['class' => 'container'],[
                    div("center left",['class' => 'element2'])
                ]),
                _div(['class' => 'container'],[
                    div("bottom left",['class' => 'element3'])
                ]),
                _div(['class' => 'container'],[
                    div("top center",['class' => 'element4'])
                ]),
                _div(['class' => 'container'],[
                    div("center center",['class' => 'element5'])
                ]),
                _div(['class' => 'container'],[
                    div("bottom center",['class' => 'element6'])
                ]),
                _div(['class' => 'container'],[
                    div("top right",['class' => 'element7'])
                ]),
                _div(['class' => 'container'],[
                    div("center right",['class' => 'element8'])
                ]),
                _div(['class' => 'container'],[
                    div("bottom right",['class' => 'element9'])
                ]),
            ])
        ],
        'atributos' => []
    ]
]);