<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hero;
use App\Image;

class SuperHeroController extends Controller
{
    public function index()
    {
     $heroes = DB::table('heroes')
            ->join('image', 'heroes.id', '=', 'image.hero_id')
            ->select('heroes.*', 'image.name')
            ->paginate(5);
      return view('pages.index', compact(['heroes']));
    }

    public function show($id)
    { 
        $heroes = Hero::with(['image'])->findOrFail($id);
        return view('pages.show', compact(['heroes']));
    }

    public function create()
    {  
       return view('pages.create');
    }

    public function save(Request $request) { 
        $this->validate($request, [     
            'nick'  =>'required',
            'real_name' => 'required',
            'origin_description' => 'required',
            'superpowers' => 'required',
            'catch_phrase' => 'required'
        ]);
       
        $nick = $request['nick'];
        $real_name = $request['real_name'];
        $origin_description = $request['origin_description'];
        $superpowers = $request['superpowers'];
        $catch_phrase = $request['catch_phrase'];

        $cart_model = Hero::create(
           ['nick' => $nick, 
           'real_name' => $real_name,'origin_description' => $origin_description,
           'superpowers' => $superpowers,
            'catch_phrase' =>$catch_phrase]
        );
         return redirect()->back();
    }

    public function image_save(Request $request) {

        $this->validate($request, [
            'hero_id'  =>'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $hero_id = $request['hero_id'];
        $images = $request['images'];
        if($request->hasFile('images')){
                $file = $request->file('images');
                $path = '/img/' . $file->hashName();
                $file->move(public_path() . '/img/', $file->hashName());
                $images->image = $path;
            }

        $cart_model = Image::create(
           ['hero_id' =>$hero_id,
            'name' =>$path]
        );
         return redirect(route('heroes'));
    }


    public function edit($id)
    {
       $heroes = Hero::with('image')->find($id);
        return view('pages.update',compact('heroes'));
    }

    public function update(Request $request, $id)
{
      $request->validate([
            'nick'  =>'required',
            'real_name' => 'required',
            'origin_description' => 'required',
            'superpowers' => 'required',
            'catch_phrase' => 'required'
      ]);

      $hero = Hero::find($id);
      $hero->nick = $request->get('nick');
      $hero->real_name = $request->get('real_name');
      $hero->origin_description = $request->get('origin_description');
      $hero->superpowers = $request->get('superpowers');
      $hero->catch_phrase = $request->get('catch_phrase');
      $hero->save();

      return redirect(route('heroes'));
      }

    public function destroy($id)
    {   
        $hero = Hero::with('image')->find($id);
        $hero->delete();
        return redirect(route('heroes'));
    }

    public function image_destroy($id)
    {   
        $hero = Image::with('image')->find($id);
        $hero->delete();
        return redirect()->back();
    }

}
