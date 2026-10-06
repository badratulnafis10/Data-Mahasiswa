<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Setting;


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {

    return view('login');

});


Route::post('/login', function (Request $request) {

    if (
        $request->username === 'admin' &&
        $request->password === '12345'
    ) {

        return redirect('/');

    }

    return back()->with(
        'error',
        'Username atau password salah!'
    );

});


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::get('/logout', function () {

    session()->forget('login');

    return redirect('/login');

});


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $students = Student::all();

    return view(
        'dashboard',
        compact('students')
    );

});


/*
|--------------------------------------------------------------------------
| DATA MAHASISWA
|--------------------------------------------------------------------------
*/

Route::get('/students', function (Request $request) {

    $students = Student::all();

    $editStudent = null;

    if ($request->has('edit')) {

        $editStudent =
            Student::find($request->edit);

    }

    return view(
        'students',
        compact(
            'students',
            'editStudent'
        )
    );

});


/*
|--------------------------------------------------------------------------
| TAMBAH MAHASISWA
|--------------------------------------------------------------------------
*/

Route::post('/students', function (Request $request) {

    $request->validate([

        'name' =>
            'required|string|max:255',

        'group' =>
            'required|string|max:255',

        'homeworks' =>
            'required|integer|min:0|max:100',

        'attendance' =>
            'required|integer|min:0',

        'projects' =>
            'required|integer|min:0',

        'grade' =>
            'required|integer|min:0|max:100',

    ]);


    Student::create([

        'name' =>
            $request->name,

        'group' =>
            $request->group,

        'homeworks' =>
            $request->homeworks,

        'attendance' =>
            $request->attendance,

        'projects' =>
            $request->projects,

        'grade' =>
            $request->grade,

    ]);


    return redirect('/students')
        ->with(
            'success',
            'Mahasiswa berhasil ditambahkan!'
        );

});


/*
|--------------------------------------------------------------------------
| EDIT MAHASISWA
|--------------------------------------------------------------------------
*/

Route::get('/students/edit/{id}', function ($id) {

    $students = Student::all();

    $editStudent =
        Student::findOrFail($id);


    return view(
        'students',
        compact(
            'students',
            'editStudent'
        )
    );

});


Route::put('/students/{id}', function (
    Request $request,
    $id
) {

    $student =
        Student::findOrFail($id);


    $request->validate([

        'name' =>
            'required|string|max:255',

        'group' =>
            'required|string|max:255',

        'homeworks' =>
            'required|integer|min:0|max:100',

        'attendance' =>
            'required|integer|min:0',

        'projects' =>
            'required|integer|min:0',

        'grade' =>
            'required|integer|min:0|max:100',

    ]);


    $student->update([

        'name' =>
            $request->name,

        'group' =>
            $request->group,

        'homeworks' =>
            $request->homeworks,

        'attendance' =>
            $request->attendance,

        'projects' =>
            $request->projects,

        'grade' =>
            $request->grade,

    ]);


    return redirect('/students')
        ->with(
            'success',
            'Data mahasiswa berhasil diubah!'
        );

});


/*
|--------------------------------------------------------------------------
| HAPUS MAHASISWA
|--------------------------------------------------------------------------
*/

Route::delete('/students/{id}', function ($id) {

    $student =
        Student::findOrFail($id);


    $student->delete();


    return redirect('/students')
        ->with(
            'success',
            'Mahasiswa berhasil dihapus!'
        );

});


/*
|--------------------------------------------------------------------------
| MATA KULIAH
|--------------------------------------------------------------------------
*/

Route::get('/courses', function () {

    return view('courses');

});


/*
|--------------------------------------------------------------------------
| KALENDER
|--------------------------------------------------------------------------
*/

Route::get('/calendar', function () {

    return view('calendar');

});


/*
|--------------------------------------------------------------------------
| PENGATURAN
|--------------------------------------------------------------------------
*/

Route::get('/settings', function () {

    $profile =
        Setting::first();


    if (!$profile) {

        $profile =
            Setting::create([

                'name' =>
                    'Badratul Nafis',

                'npm' =>
                    '24105111143',

                'semester' =>
                    5,

            ]);

    }


    return view(
        'settings',
        compact('profile')
    );

});


Route::post('/settings', function (
    Request $request
) {

    $request->validate([

        'name' =>
            'required|string|max:255',

        'npm' =>
            'required|string|max:50',

        'semester' =>
            'required|integer|min:1|max:14',

    ]);


    $profile =
        Setting::first();


    if (!$profile) {

        $profile =
            new Setting();

    }


    $profile->name =
        $request->name;

    $profile->npm =
        $request->npm;

    $profile->semester =
        $request->semester;


    $profile->save();


    return redirect('/settings')
        ->with(
            'success',
            'Pengaturan berhasil disimpan!'
        );

});