<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //for database
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riaz@gmail.com';
        $this->student->mobile = '256789';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0=>[
                'id'    =>1,
                'name'  =>'Tarok_Saha',
                'email' =>'tarok@gmail.com',
                'mobile'=>'017863456',
                'image' =>'',
            ],
            1=>[
                'id'    =>2,
                'name'  =>'abul',
                'email' =>'abul@gmail.com',
                'mobile'=>'017877777777',
                'image' =>'',
            ]
        ];
    }
}
