<?php

namespace App\Http\Controllers;

use DB;
use Route;
use Validator;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;
use Symfony\Component\Mime\Message;

class PagesController extends Controller
{
    public function __construct()
    {

        $paths = [];

        foreach ( Route::getRoutes() as $route)
        {
            if (in_array('GET', $route->methods()))
            {

                $path = $route->uri();

                if ($path !== 'up'){
            $paths[$path] = $path === "/" ? "Home" : ucfirst($path);
                }

            }

        }

        $paths = array_unique ( $paths );

       view()->share("nav_links", $paths);
    }

    public function index()
    {

        return view('pages.home')
        ->with("title", "Vimma");


    }

    public function products()
    {

        return view("pages.products")
        ->with("title", "Our Products");

    }

    public function gallery()
    {

        $images = [
            "img/blueberry1.jpg",
            "img/blueberry2.jpg",
            "img/blueberry3.jpg",
            "img/blueberry4.jpg",
            "img/blueberry5.jpg",
            "img/blueberry6.jpg"
        ];


        return view("pages.gallery")
        ->with("title", "Gallery Vimma")
        ->with("images", $images);

    }

    public function blog()
    {

        return view("pages.blog")
        ->with("title", "About us");

    }

    public function contact()
    {

        return view("pages.contact")
        ->with("title", "Contact us");

    }

    public function store( Request $request)
    {
        $validator = Validator::make( $request->all(), [
            "name" => "required",
            "email" => "required|email",
            'message' => 'required',
        ]);

        if ( $validator ->fails()) {
            return redirect()->route('contact')
            ->withErrors( $validator)
            ->withInput();
        }

        DB::table("messages")->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'created_at' => now(), // Alebo iný spôsob nastavenia času
            'updated_at' => now(), // Alebo iný spôsob nastavenia času
        ]);

         // Uloženie flash správy do session
         $request->session()->flash('status', 'Your form has been successfully submitted!');

         // Presmerovanie na kontaktovú stránku s flash správou
         return redirect()->route('contact');
     }

    }



