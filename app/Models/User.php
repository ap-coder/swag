<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(schema="User", required={""},
 *  @OA\Property(property="id", description="id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="name", description="name", type="string"),
 *  @OA\Property(property="email", description="email", type="string"),
 *  @OA\Property(property="email_verified_at", description="email_verified_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="password", description="password", type="string"),
 *  @OA\Property(property="remember_token", description="remember_token", type="string"),
 *  @OA\Property(property="verified", description="verified", type="boolean"),
 *  @OA\Property(property="verified_at", description="verified_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="verification_token", description="verification_token", type="string"),
 *  @OA\Property(property="user_token", description="user_token", type="string"),
 *  @OA\Property(property="access_token", description="access_token", type="string"),
 *  @OA\Property(property="refresh_token", description="refresh_token", type="string"),
 *  @OA\Property(property="api_token", description="api_token", type="string"),
 *  @OA\Property(property="secret", description="secret", type="string"),
 *  @OA\Property(property="approved", description="approved", type="boolean"),
 *  @OA\Property(property="about", description="about", type="string"),
 *  @OA\Property(property="token", description="token", type="string"),
 *  @OA\Property(property="activation_key", description="activation_key", type="string"),
 *  @OA\Property(property="created_at", description="created_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="updated_at", description="updated_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="deleted_at", description="deleted_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="team_id", description="team_id", type="integer",
 *          format="int32")
 * )
 */
class User extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'verified',
        'verified_at',
        'verification_token',
        'user_token',
        'access_token',
        'refresh_token',
        'api_token',
        'secret',
        'approved',
        'about',
        'token',
        'activation_key',
        'team_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'verified' => 'boolean',
        'verified_at' => 'datetime',
        'verification_token' => 'string',
        'user_token' => 'string',
        'access_token' => 'string',
        'refresh_token' => 'string',
        'api_token' => 'string',
        'secret' => 'string',
        'approved' => 'boolean',
        'about' => 'string',
        'token' => 'string',
        'activation_key' => 'string',
        'team_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'nullable|string|max:255',
        'remember_token' => 'nullable|string|max:255',
        'verified' => 'nullable|boolean',
        'verified_at' => 'nullable',
        'verification_token' => 'nullable|string|max:255',
        'user_token' => 'nullable|string|max:255',
        'access_token' => 'nullable|string|max:255',
        'refresh_token' => 'nullable|string|max:255',
        'api_token' => 'nullable|string|max:255',
        'secret' => 'nullable|string|max:255',
        'approved' => 'nullable|boolean',
        'about' => 'nullable|string',
        'token' => 'nullable|string|max:255',
        'activation_key' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'team_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function team()
    {
        return $this->belongsTo(\App\Models\Team::class, 'team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function accounts()
    {
        return $this->hasMany(\App\Models\Account::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function achievements()
    {
        return $this->belongsToMany(\App\Models\Achievement::class, 'achievement_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function courses()
    {
        return $this->belongsToMany(\App\Models\Course::class, 'course_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function course1s()
    {
        return $this->hasMany(\App\Models\Course::class, 'teacher_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function discussions()
    {
        return $this->hasMany(\App\Models\Discussion::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function myCustomers()
    {
        return $this->hasMany(\App\Models\MyCustomer::class, 'customers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function qaMessages()
    {
        return $this->hasMany(\App\Models\QaMessage::class, 'sender_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function qaTopics()
    {
        return $this->hasMany(\App\Models\QaTopic::class, 'creator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function qaTopic2s()
    {
        return $this->hasMany(\App\Models\QaTopic::class, 'receiver_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function replies()
    {
        return $this->hasMany(\App\Models\Reply::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function supports()
    {
        return $this->hasMany(\App\Models\Support::class, 'assign_to_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function team3s()
    {
        return $this->hasMany(\App\Models\Team::class, 'owner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function testResults()
    {
        return $this->hasMany(\App\Models\TestResult::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function userAlerts()
    {
        return $this->belongsToMany(\App\Models\UserAlert::class, 'user_user_alert');
    }
}
