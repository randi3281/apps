<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Path ke folder belajar/database
        $basePath = database_path('seeders/belajar/database');

        // Dapatkan semua folder di dalam belajar/database
        $folders = File::directories($basePath);

        foreach ($folders as $folder) {
            // Dapatkan semua file di dalam folder saat ini
            $files = File::allFiles($folder);

            foreach ($files as $file) {
                // Buat nama kelas seeder dari path file
                $relativePath = str_replace($basePath . DIRECTORY_SEPARATOR, '', $file->getPathname());
                $class = 'Database\\Seeders\\belajar\\database\\' . str_replace(DIRECTORY_SEPARATOR, '\\', pathinfo($relativePath, PATHINFO_DIRNAME)) . '\\' . pathinfo($file, PATHINFO_FILENAME);

                // Panggil seeder
                $this->call($class);
        }
    }
}
}
