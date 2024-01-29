<?php

namespace App\Helpers;


use Image as InterventionImages;
use ImageOptimizer;

class Image
{
    /**
     * Метод меняет размер изображения
     */
    public function resize(string $path, string $thumb, int $width = 200, int $height = 200)
    {
        InterventionImages::make($path)
            ->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($thumb);

        ImageOptimizer::optimize($path);
    }

    /**
     * Метод создает превьюшку для изображения
     */
    final public function createThumbnail(string $path, string $thumb, $width = 600, $height = 600)
    {
        $this->resize($path, $thumb, $width, $height);
    }

    /**
     * Метод преобразует изображение в webp
     */
    final public function convertToWebp(string $path)
    {
        $img = $this->createImage($path);
        $filename = substr(basename($path), 0, -4);
        $out = dirname($path) . '/' . $filename . '.webp';

        imagewebp($img, $out);
        imagedestroy($img);
    }

    /**
     * Создает изображение для конвертации
     */
    private function createImage(string $path): mixed
    {
        switch (exif_imagetype($path)) {
            case 1: // gif
                $img = imagecreatefromgif($path);
                imagepalettetotruecolor($img);
                break;
            case 2: // jpg
                $img = imagecreatefromjpeg($path);
                imagepalettetotruecolor($img);
                break;
            case 3: // png
                $img = imagecreatefrompng($path);
                imagepalettetotruecolor($img);
                imagealphablending($img, true);
                imagesavealpha($img, true);
                break;
            case 6:// bmp
                $img = imagecreatefrombmp($path);
                imagepalettetotruecolor($img);
                break;
            default:
                throw new \Exception('Unexpected value');
        }

        return $img;
    }
}
