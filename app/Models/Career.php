<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(schema="Career", required={""},
 *  @OA\Property(property="id", description="id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="job_title", description="job_title", type="string"),
 *  @OA\Property(property="open_date", description="open_date", type="string",
 *          format="date"),
 *  @OA\Property(property="close_date", description="close_date", type="string",
 *          format="date"),
 *  @OA\Property(property="job_description", description="job_description", type="string"),
 *  @OA\Property(property="about_code_section", description="about_code_section", type="string"),
 *  @OA\Property(property="published", description="published", type="boolean"),
 *  @OA\Property(property="apply_link", description="apply_link", type="string"),
 *  @OA\Property(property="slug", description="slug", type="string"),
 *  @OA\Property(property="view_count", description="view_count", type="integer",
 *          format="int32"),
 *  @OA\Property(property="created_at", description="created_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="updated_at", description="updated_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="deleted_at", description="deleted_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="department_id", description="department_id", type="integer",
 *          format="int32")
 * )
 */
class Career extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'careers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'job_title',
        'open_date',
        'close_date',
        'job_description',
        'about_code_section',
        'published',
        'apply_link',
        'slug',
        'view_count',
        'department_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'job_title' => 'string',
        'open_date' => 'date',
        'close_date' => 'date',
        'job_description' => 'string',
        'about_code_section' => 'string',
        'published' => 'boolean',
        'apply_link' => 'string',
        'slug' => 'string',
        'view_count' => 'integer',
        'department_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'job_title' => 'nullable|string|max:255',
        'open_date' => 'nullable',
        'close_date' => 'nullable',
        'job_description' => 'nullable|string',
        'about_code_section' => 'nullable|string',
        'published' => 'nullable|boolean',
        'apply_link' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255',
        'view_count' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'department_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function benefits()
    {
        return $this->belongsToMany(\App\Models\Benefit::class, 'benefit_career');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function education()
    {
        return $this->belongsToMany(\App\Models\Education::class, 'career_education');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function employmentTypes()
    {
        return $this->belongsToMany(\App\Models\EmploymentType::class, 'career_employment_type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function jobSkills()
    {
        return $this->belongsToMany(\App\Models\JobSkill::class, 'career_job_skill');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function locations()
    {
        return $this->belongsToMany(\App\Models\Location::class, 'career_location');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function paytypes()
    {
        return $this->belongsToMany(\App\Models\Paytype::class, 'career_paytype');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function qualifications()
    {
        return $this->belongsToMany(\App\Models\Qualification::class, 'career_qualification');
    }
}
