<?php

namespace App\Livewire\Admin\OfferedServices;

use App\Models\OfferedServices;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Services')]
class Index extends Component
{
  public $content = 'List services offered';

  public function render()
  {
    return view('livewire.admin.offered-services.index', [
      'data' => OfferedServices::all()
    ]);
  }
}
