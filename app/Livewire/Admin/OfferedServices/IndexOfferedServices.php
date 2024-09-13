<?php

namespace App\Livewire\Admin\OfferedServices;

use App\Models\OfferedServices;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Services')]
class IndexOfferedServices extends Component
{
  public $search = '';

  public function delete(OfferedServices $model)
  {
    $model->delete();
  }

  public function render()
  {
    sleep(1);

    $data = OfferedServices::when(
      $this->search,
      function (Builder $query) {
        $query->whereLike('name', "%$this->search%");
      }
    )
      ->paginate(100);

    return view('livewire.admin.offered-services.index-offered-services', [
      'data' => $data
    ]);
  }
}
