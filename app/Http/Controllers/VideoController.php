<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        // Pega todos os arquivos da pasta 'public/videos'
        $files = Storage::files('public/videos');

        // Filtra arquivos de vídeo pelos formatos suportados
        $videoFormats = ['mp4', 'webm', 'ogg', 'avi', 'mov', 'wmv', 'flv', 'mkv', 'mpg', 'mpeg'];
        $videos = array_filter($files, function($file) use ($videoFormats) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            return in_array($extension, $videoFormats);
        });

        // Remove o prefixo 'public/' para criar URLs acessíveis
        $videos = array_map(function($video) {
            return str_replace('public/', '', $video);
        }, $videos);

         // Associar cada vídeo à sua capa de imagem
        $videoData = [];
        foreach ($videos as $video) {
            $videoName = pathinfo($video, PATHINFO_FILENAME);
            $imagePath = 'posters/' . $videoName . '.png';
            if (!Storage::exists('public/' . $imagePath)) {
                $imagePath = 'posters/default.png';
            }
            $videoData[] = [
                'video' => $video,
                'image' => $imagePath,
                'name'  => $videoName
            ];
        }

        return view('stream', compact('videoData'));
    }
}
