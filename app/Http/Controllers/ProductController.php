<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Validaciones;
use App\Providers\RouteServiceProvider;
use App\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'min:2', 'max:255'],
            'description' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required', 'mimes:jpeg,jpg,png,svg']

        ]);
    }

    /**
     * Create a new product instance
     *
     * @param  array  $data
     * @return \App\Product
     */
    public function create(Validaciones $req)
    {
       
        $pathImage=$req->file('image')->store("public");
        $filename = basename($pathImage);
        $nuevoProducto = new Product();
            $nuevoProducto->id_user= auth()->user()->id;           
            $nuevoProducto->name = $req['name'];
            $nuevoProducto->price = $req['price'];
            $nuevoProducto->stock = $req['stock'];
            $nuevoProducto->description = $req['description'];
            $nuevoProducto->image = $filename;

            $nuevoProducto->save();
        
        return redirect('/product/list');
    }

    protected function index()
    {
        return view('product');
    }

    public function listaProducto()
    {
        
        // $productos = Product::paginate(1);//paginate en vez del metod all();
        $productos = Product::where('id_user',"=",auth()->user()->id)->paginate(2);
        $vac = compact('productos');
        return view('listaProductos',$vac);
    }

    public function search(Request $req)
    {
        $query = $req['search'];
        $productos = Product::where('name','LIKE','%'.$query.'%')->where('id_user',"=",auth()->user()->id)->paginate(2);
        $vac = compact('productos');
        return view('listaProductos',$vac);
    }

    public function edit($id){
        $unProducto = Product::find($id);
        $vac = compact('unProducto');
        return view('editProducto',$vac);
    }

    public function editPost(Request $req)
    {
        $reglas = [
            'name' => ['required', 'string','min:2', 'max:255'],
            'price' => ['required', 'numeric', 'min:1','max:100000'],
            'stock' => ['required', 'numeric', 'min:0','max:100000'],
            'description' => ['required', 'string', 'min:5', 'max:255'],
            'image' => ['mimes:jpeg,jpg,png']

        ];

        $this->validate($req,$reglas);


        
        $id = $req['id'];
        $unProducto = Product::find($id);
        if($req->file('image')){
            $pathImage=$req->file('image')->store("public");
            $filename = basename($pathImage);
            $unProducto->image = $filename;
        }
        // else{
        //     $unProducto->image = $this->image;
        // }
       
        if($req['description']){
            $unProducto->description = $req['description'];
        }

        $unProducto->id_user= auth()->user()->id;           
        $unProducto->name = $req['name'];
        $unProducto->price = $req['price'];
        $unProducto->stock =$req['stock'];
       

        $unProducto->save();
    
    return redirect('/product/list');
    }

    public function delete(Request $req){
        $id = $req['id'];
        $producto = Product::find($id);
        $producto->delete();
        return redirect('/product/list');
    }
}
