<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Validator;


class MenuController extends Controller
{
    function menus() {
        return Menu::all();
    }
    function menus_id($id) {
        return Menu::find($id);
    }
    function restaurants_id_menus($id) {
        return Menu::where('restaurant_id', $id)->get();
    }
    function restaurants_id_menus_post (Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        } else {
            $menu = new Menu();
            $menu-> name = $request->name;
            $menu-> description = $request->description;
            $menu-> price = $request->price;
            $menu-> restaurant_id = $id;
            $menu->save();
            return response($menu,201);;
        }
    }
    function menus_id_delete($id) {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return response()->json([
                'message' => "Menu deleted."
            ], 200);
        } else {
            return response()->json([
                'message' => "Menu doesn't exist."
            ], 400);
        }
    }
    function menus_id_put(Request $request, $id) {
        $menu = Menu::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        } else if ($menu) {
            if ($request->name)
                $menu-> name = $request->name;
            if ($request->description)
                $menu-> description = $request->description;
            if ($request->price)
                $menu-> price = $request->price;
            $menu->save();
            return response($menu,200);;
        } else {
            return response()->json([
                'message' => "Menu doesn't exist."
            ], 400);
        }
    }
}
