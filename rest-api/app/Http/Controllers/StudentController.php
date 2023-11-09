<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        //menggunakan model students untuk select data
        $students = Student::all();

        if (!empty($students)){
            $response = [
                'message' => 'Menampilkan Semua Data Student',
                'data' => $students,
            ];
            return response()->json($response, 200);
        } else  {
            $response = [
                'message' => 'Data tidak ada'
            ];
            return response()->json($response, 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // Membuat data student
    public function store(Request $request)
    {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        $student = Student::create($request->all());

        $response = [
            'message' => 'Data Student Berhasil di Buat',
            'data' => $student,
        ];

        return response()->json($response, 201);
    }

    //  Menampilkan data student
    public function show($id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Get detail student',
				'data' => $student
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];
			
			return response()->json($response, 404);
		}
	}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

   // Mengganti/merubah/mengupdate data student
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        if ($student) {
			$response = [
				'message' => 'Student updated succesfully',
				'data' => $student->update($request->all())
			];

            return response()->json($response, 200);
        } else {
            $response = [
                'message' => 'Data not found'
            ];

            return response()->json($response, 404);
        }
    }

   // Menghapus data student
    public function destroy($id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Data Students Berhasil di Hapus',
				'data' => $student->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }
}
