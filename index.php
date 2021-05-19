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
            ],".container",4),
            sye([
                'text-align' => 'left',
                'line-height' => '180px'
            ],".container1"),
            sye([
                'text-align' => 'center',
                'line-height' => '180px'
            ],".container2"),
            sye([
                'text-align' => 'right',
                'line-height' => '180px'
            ],".container3"),
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
            ],".element",10,true),
            sye([
                'display' => 'inline-block',
                'line-height' => '45px',
                'vertical-align' => 'top'
            ],".element1"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'middle'
            ],".element2"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'bottom'
            ],".element3"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'top'
            ],".element4"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'middle'
            ],".element5"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'bottom'
            ],".element6"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'top'
            ],".element7"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'middle'
            ],".element8"),
            sye([
                'display' => 'inline-block',
                'line-height' => '20px',
                'vertical-align' => 'bottom'
            ],".element9")
        ])
    ],
    'body' => [
        'contenido' => [
            _div([
                'class' => 'wrapper'
            ],[
                _div(['class' => 'container1'],[
                    div("top left",['class' => 'element1'])
                ]),
                _div(['class' => 'container1'],[
                    div("center left",['class' => 'element2'])
                ]),
                _div(['class' => 'container1'],[
                    div("bottom left",['class' => 'element3'])
                ]),
                _div(['class' => 'container2'],[
                    div("top center",['class' => 'element4'])
                ]),
                _div(['class' => 'container2'],[
                    div("center center",['class' => 'element5'])
                ]),
                _div(['class' => 'container2'],[
                    div("bottom center",['class' => 'element6'])
                ]),
                _div(['class' => 'container3'],[
                    div("top right",['class' => 'element7'])
                ]),
                _div(['class' => 'container3'],[
                    div("center right",['class' => 'element8'])
                ]),
                _div(['class' => 'container3'],[
                    div("bottom right",['class' => 'element9'])
                ]),
            ])
        ],
        'atributos' => []
    ]
]);