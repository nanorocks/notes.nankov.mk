<?php

namespace App\Livewire\Videos;

use App\Livewire\Forms\VideoForm;
use App\Models\Video;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public VideoForm $form;

    public function mount(Video $video)
    {
        $this->form->setVideoModel($video);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('videos.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.video.create');
    }
}
