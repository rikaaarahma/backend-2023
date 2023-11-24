// Membuat Variable
let nama = "Rika Rahma";
console.log(nama);

// Membuat Array
let angka = [1, 2, 3, 4, 5];
console.log(angka[0]);
console.log(angka.length);

// Mmebuat Array Object
let listmahasiswa = [
    {
    nama: "Rika Rahma",
    nim: "0110222134",
    prodi: "Teknik Informatika" 
    },
    {
    nama: "Sintia Sari",
    nim: "0110222135",
    prodi: "Teknik Informatika" 
    },
    {
    nama: "Reva Aulia",
    nim: "0110222240",
    prodi: "Teknik Informatika" 
    },
];
console.log(listmahasiswa[2].nama);

// Membuat Object
let mahasiswa = {
    // key:value
    nama: "Rika Rahma",
    nim: "0110222134",
    prodi: "Teknik Informatika"
};
console.log(mahasiswa.prodi);
console.log(mahasiswa.nim);

// Membuat If Else
let nilai = 90;
if (nilai > 80) {
    console.log("Lulus");
} else {
    console.log("Tidak Lulus");
}

// Looping 1-10
// Menerima 3 parameter (start, end, step)
for (let i = 1; i<= 10; i++)  {
    console.log(i);
}

// Function
function tambah(angka1, angka2) {
    return angka1 + angka2;
}
console.log(tambah(5, 7));