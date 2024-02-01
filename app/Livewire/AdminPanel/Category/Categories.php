<?php

namespace App\Livewire\AdminPanel\Category;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

#[Layout("AdminPanel.index")]
#[Title("Category Management")]

class Categories extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public int $id;
    public string $name;

    public function add_category()
    {

        $this->validate([
            "name" => "required|string|max:40|unique:categories,name"
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->save();

        $this->reset("name");

        $this->dispatch(
            "bs-modal-hide",
            name: "addCategoryModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "New Category Added."
        );
    }

    public function open_editable_category_modal($id)
    {
        $category = Category::find($id);
        $this->id = $category->id;
        $this->name = $category->name;
    }

    public function edit_category($id)
    {
        $this->validate([
            "name" => "required|string|max:40|unique:categories,name,$id"
        ]);

        $category = Category::find($id);
        if (!is_null($category)) {
            $category->name = $this->name;
            $category->update();
        }

        $this->reset(["id", "name"]);

        $this->dispatch(
            "bs-modal-hide",
            name: "editCategoryModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Category Updated."
        );
    }

    public function open_confirmed_deletable_category_modal($id)
    {
        $this->id = $id;
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            $category->delete();
        }
        $this->reset("id");

        $this->dispatch(
            "alert",
            type: "success",
            title: "Category Deleted."
        );
    }

    public function render()
    {
        $categories = Category::with('news')->paginate(4);
        return view('livewire.admin-panel.category.categories', compact("categories"));
    }
}
