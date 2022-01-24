<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cautelas\Cautelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $rules = ['name' => 'required|max:255', 'is_active' => 'boolean'];

    public function index()
    {
        $lista = Category::all();

        return response()->json($lista);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        return Category::create($request->all());
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $categoria = new Category();
        $categoria->where('id','=',$id)->update($request->all());

        return response()->json($categoria->find($id));

    }

    public function destroy($id)
    {
       $categoria = Category::find($id);
        $categoria->delete();

        return response()->noContent(204);
    }
}
