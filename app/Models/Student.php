<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'course_id'];
    public function course()
        {
        return $this->belongsTo(Course::class);
        }

}
