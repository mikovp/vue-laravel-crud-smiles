<?php

namespace App\Http\Controllers;

use App\Models\Smile;
use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SmilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Smile::all()->jsonSerialize(), Response::HTTP_OK);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {
        $smile = new Smile();
        $smile->name = $faker->word;
        $smile->emotion = $faker->boolean ? 'happy' : 'ok';
        $smile->save();
        return response($smile->jsonSerialize(), Response::HTTP_CREATED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $smile = Smile::findOrFail($id);
        $smile->emotion = $request->emotion;
        $smile->save();
        return response(null, Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Smile::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}
