<?php

namespace App\Livewire\Videos;

use App\Livewire\Forms\VideoForm;
use App\Models\Video;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public VideoForm $form;

    public function mount(Video $video)
    {
        $this->form->setVideoModel($video);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.video.show', ['video' => $this->form->videoModel]);
    }
}
