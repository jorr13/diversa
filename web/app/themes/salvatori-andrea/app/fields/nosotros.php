<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('Pestañas de nosotros');

$post
    ->setLocation('page', '==', 34);
  
$post
    ->addTab('Titulo Izquierda', ['placement' => 'top'])
        ->addText('title-left-nosotros', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-left-nosotros', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ->addTab('Titulo Centro', ['placement' => 'top'])
        ->addText('title-center-nosotros', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-center-nosotros', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ->addTab('Titulo Derecha', ['placement' => 'top'])
        ->addText('title-right-nosotros', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-right-nosotros', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ;return $post;