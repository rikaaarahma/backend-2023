<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = [
        ["name" => "Butterfly"],
        ["name" => "Elephant"],
        ["name" => "Bear"],
        ["name" => "Bird"],
        ["name" => "Rabbit"]
    ];
    
    #method index - menampilkan data animals
    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "Nama Hewan : $animal[name] <br>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    # method store - menambahkan hewan baru
    public function store(Request $request)
    {
        array_push($this->animals, $request);
        $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    #method update - mengupdate hewan
    public function update(Request $request, string $id)
    {
        $this->animals[$id] = $request;
        $this->index();
    }

    # method destroy - menghapus hewan
    public function destroy(string $id)
    {
        #gunakan method unset atau array_splice
        unset($this->animals[$id]);
        $this->index();
    }
}
