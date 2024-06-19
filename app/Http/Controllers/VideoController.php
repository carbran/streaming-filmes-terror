<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videoPath = env('VIDEO_URL');

        $videoData = [
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_INUSITADOS_QUE_VOCE_NAO_VIU.webm',
                'image' => 'images/8 FILMES DE TERROR INUSITADOS QUE VOCÊ NÃO VIU.png',
                'name'  => '8 FILMES DE TERROR INUSITADOS QUE VOCÊ NÃO VIU'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_PRA_SE_BORRAR_DE_MEDO_-_ASSOMBRACAO_PSICOLOGICA.webm',
                'image' => 'images/8 FILMES DE TERROR PRA SE BORRAR DE MEDO - ASSOMBRAÇÃO PSICOLÓGICA.png',
                'name'  => '8 FILMES DE TERROR PRA SE BORRAR DE MEDO - ASSOMBRAÇÃO PSICOLÓGICA'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_PRA_SE_BORRAR_DE_MEDO_-_INVASAO_DOMICILIAR.webm ',
                'image' => 'images/8 FILMES DE TERROR PRA SE BORRAR DE MEDO - INVASÃO DOMICILIAR.png',
                'name'  => '8 FILMES DE TERROR PRA SE BORRAR DE MEDO - INVASÃO DOMICILIAR'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_PRA_SE_BORRAR_DE_MEDO_-_LOBISOMEM.webm',
                'image' => 'images/8 FILMES DE TERROR PRA SE BORRAR DE MEDO - LOBISOMEM.png',
                'name'  => '8 FILMES DE TERROR PRA SE BORRAR DE MEDO - LOBISOMEM'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_PRA_SE_BORRAR_DE_MEDO_-_ZUMBIS_MODERNOS.webm',
                'image' => 'images/8 FILMES DE TERROR PRA SE BORRAR DE MEDO - ZUMBIS MODERNOS.png',
                'name'  => '8 FILMES DE TERROR PRA SE BORRAR DE MEDO - ZUMBIS MODERNOS'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_PRA_VOCE_SE_BORRAR_DE_MEDO.webm',
                'image' => 'images/8 FILMES DE TERROR PRA VOCÊ SE BORRAR DE MEDO.png',
                'name'  => '8 FILMES DE TERROR PRA VOCÊ SE BORRAR DE MEDO'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_SUBESTIMADOS_2.webm',
                'image' => 'images/8 FILMES DE TERROR SUBESTIMADOS 2.png',
                'name'  => '8 FILMES DE TERROR SUBESTIMADOS 2'
            ],
            [
                'video' => $videoPath.'/8_FILMES_DE_TERROR_SUBESTIMADOS.webm',
                'image' => 'images/8 FILMES DE TERROR SUBESTIMADOS.png',
                'name'  => '8 FILMES DE TERROR SUBESTIMADOS'
            ],
            [
                'video' => $videoPath.'/8_MELHORES_FILMES_DE_TERROR_FOUND_FOOTAGE_QUE_VOCE_NAO_VIU.mp4',
                'image' => 'images/8 MELHORES FILMES DE TERROR FOUND FOOTAGE QUE VOCÊ NÃO VIU.png',
                'name'  => '8 MELHORES FILMES DE TERROR FOUND FOOTAGE QUE VOCÊ NÃO VIU'
            ],
        ];

        return view('stream', compact('videoData'));
    }
}
