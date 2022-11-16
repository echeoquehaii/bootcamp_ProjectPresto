<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Spatie\Image\Manipulations;

class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    

    private $announce_image_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($announce_image_id)
    {
        $this->announce_image_id = $announce_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = Image::find($this->announce_image_id);
        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

       

        $image = SpatieImage::load($srcPath);

        $image->watermark(base_path('resources/media/logo.png'))
            ->watermarkOpacity(50)
            ->watermarkPosition('top-left')
            ->watermarkFit(Manipulations::FIT_STRETCH);

        $image->save($srcPath);


    }
}
