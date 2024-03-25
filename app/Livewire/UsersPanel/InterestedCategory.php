<?php

namespace App\Livewire\UsersPanel;

use App\Models\Category;
use App\Models\InterestedCategory as ModelsInterestedCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Interested on Categories")]
class InterestedCategory extends Component
{
    public $selected_category = [];
    public $user_id;

    public function mount()
    {
        $this->user_id = session()->get('user')['id'];
    }

    public function chose($category_id)
    {
        if (!in_array($category_id, $this->selected_category)) {
            array_push($this->selected_category, $category_id);
        } else {
            $key = array_search($category_id, $this->selected_category);
            ModelsInterestedCategory::where('user_id', $this->user_id)->where('category_id', $this->selected_category[$key])->delete();
            unset($this->selected_category[$key]);
        }
    }

    public function save()
    {

        if (!empty($this->selected_category)) {
            foreach ($this->selected_category as  $value) {
                ModelsInterestedCategory::updateOrCreate([
                    "user_id" => $this->user_id,
                    "category_id" => $value
                ]);
            }
        }
        $this->redirectRoute('user.interested-category');
    }
    public function render()
    {
        $categories = Category::all();
        $interested_category = ModelsInterestedCategory::where('user_id', $this->user_id)->pluck('category_id');
        return view('livewire.users-panel.interested-category')->with(compact('categories', 'interested_category'));
    }
}
