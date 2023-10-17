<?php
# Membuat class animal
class Animal {
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter : data hewan (array)
    public function __construct($animals) 
    {
        $this->animals = $animals;
    }

    # method index - menampilkan data animals
    public function index () {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->animals as $animal) 
        {
            # code
            echo "$animal <br>";
        }
        return $this;
    }

    # method store - menambahkan hewan baru
    # parameter : hewan baru
    public function store ($data) 
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $data);

    }

    # method update - memperbarui data
    # parameter : index dan hewan baru
    public function update ($index, $data) 
    {
        $this->animals[$index] = $data;

        return $this;
    }

    # method destroy - menghapus hewan
    # parameter : index
    public function destroy ($index) 
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->animals[$index]);

        return $this;
    }
}

# membuat object
# kirimkan data animals (array) ke constructor
$animal = new Animal(["Ikan, Sapi"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo '<br>';

echo "Store - Menambahkan hewan baru (burung) <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";