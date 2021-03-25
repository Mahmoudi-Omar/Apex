<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{

    use WithPagination;
    public $categoryName;

    public $comments = [];
    public $Categories;

    public function mount() {
        $this->Categories = Category::all();
    }

    public function updated($field) {
        $this->validateOnly($field,[
            'categoryName' => 'required|max:255'
        ]);
    }


    public function remove($cat_id) {
        $category = Category::find($cat_id);
        $category->delete();
    }

    public function addComment() {

        $this->validate([
            'categoryName' => 'required|max:255'
        ]);

        Category::create([
            'cat_name'=>$this->categoryName
        ]);

        $this->categoryName="";
        session()->flash('message','Category added with successufly');

    }


    public function render()
    {
        return view('livewire.comments',[
            'categoriesPg' => Category::latest()->paginate("2")
        ]);
    }


}
