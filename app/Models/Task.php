<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    protected $fillable = [
        'id_user',
        'task_name',
        'description',
    ];

    public function index($idUser)
    {
        $stmtDataTask = DB::table('task')->where('id_user', $idUser)->get();
        return $stmtDataTask;
    }

    public function createStore($idUser, $request)
    {
        $stmtDataTask = DB::table('task')->insert([
            'id_user' => $idUser,
            'task_name' => $request->taskName,
            'description' => $request->description,
            'created_at' => now(),
        ]);
        return $stmtDataTask;
    }
}
