<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lead_agent()
    {
        return $this->hasMany(LeadAgent::class, 'user_id');
    }
    public function lead()
    {
        return $this->hasOne(Lead::class, 'user_id');
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    // get Excel 

    public static function getEmployee()
    {
        $records = DB::table('users')->where('type', '=', 'Employee')->select(
            'id',
            'employee_id',
            'name',
            'email',
            'designation',
            'department',
            'phone',
            'slack_username',
            'address',
            'joining_date',
            'exit_date',
            'gender',
            'hourly_rate',
            'skills',
        )->get()->toArray();
        return $records;
    }
}
