<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('Pestañas de Servicios');

$post
    ->setLocation('post_type', '==', 'servicios');
  
$post
    ->addTab('Izquierda', ['placement' => 'top'])
        ->addText('title-left', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-left', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ->addTab('Centro', ['placement' => 'top'])
        ->addText('title-center', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-center', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ->addTab('Derecha', ['placement' => 'top'])
        ->addText('title-right', ['label' => 'Titulo'])
            ->setInstructions('Esto es el título de la sección. Lo que aquí esté escrito, aparecerá como titulo seleccionable.')

        ->addWysiwyg('content-right', ['label' => 'Contenido'])
            ->setInstructions('Esto es el contenido de la sección.')

    ;return $post;