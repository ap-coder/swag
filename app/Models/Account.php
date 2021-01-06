<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(schema="Account", required={"first_name", "last_name", "company", "title", "phone", "country", "current_customer_partner", "cortexdecoder", "epic_id_number", "already_talked_to_rep", "are_you_a_student", "are_you_a_vendor"},
 *  @OA\Property(property="id", description="id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="first_name", description="first_name", type="string"),
 *  @OA\Property(property="last_name", description="last_name", type="string"),
 *  @OA\Property(property="approved", description="approved", type="boolean"),
 *  @OA\Property(property="company", description="company", type="string"),
 *  @OA\Property(property="title", description="title", type="string"),
 *  @OA\Property(property="phone", description="phone", type="string"),
 *  @OA\Property(property="city", description="city", type="string"),
 *  @OA\Property(property="state_region", description="state_region", type="string"),
 *  @OA\Property(property="country", description="country", type="string"),
 *  @OA\Property(property="current_customer_partner", description="current_customer_partner", type="string"),
 *  @OA\Property(property="cortexdecoder", description="cortexdecoder", type="string"),
 *  @OA\Property(property="epic_id_number", description="epic_id_number", type="string"),
 *  @OA\Property(property="already_talked_to_rep", description="already_talked_to_rep", type="string"),
 *  @OA\Property(property="are_you_a_student", description="are_you_a_student", type="string"),
 *  @OA\Property(property="are_you_a_vendor", description="are_you_a_vendor", type="string"),
 *  @OA\Property(property="accept_terms", description="accept_terms", type="boolean"),
 *  @OA\Property(property="referral", description="referral", type="string"),
 *  @OA\Property(property="lead_source", description="lead_source", type="string"),
 *  @OA\Property(property="product_interest", description="product_interest", type="string"),
 *  @OA\Property(property="license_key", description="license_key", type="string"),
 *  @OA\Property(property="w_2_lcc", description="w_2_lcc", type="boolean"),
 *  @OA\Property(property="agent_1", description="agent_1", type="string"),
 *  @OA\Property(property="agent_2", description="agent_2", type="string"),
 *  @OA\Property(property="salesforce", description="salesforce", type="string"),
 *  @OA\Property(property="salesrep_email", description="salesrep_email", type="string"),
 *  @OA\Property(property="description", description="description", type="string"),
 *  @OA\Property(property="last_login", description="last_login", type="string",
 *          format="date-time"),
 *  @OA\Property(property="contract_agreed", description="contract_agreed", type="boolean"),
 *  @OA\Property(property="contract_agreed_date", description="contract_agreed_date", type="string",
 *          format="date"),
 *  @OA\Property(property="contract_form_sent", description="contract_form_sent", type="string"),
 *  @OA\Property(property="consulted", description="consulted", type="boolean"),
 *  @OA\Property(property="display_name", description="display_name", type="string"),
 *  @OA\Property(property="created_at", description="created_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="updated_at", description="updated_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="deleted_at", description="deleted_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="team_id", description="team_id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="sales_rep_id", description="sales_rep_id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="industy_id", description="industy_id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="user_id", description="user_id", type="integer",
 *          format="int32")
 * )
 */
class Account extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'approved',
        'company',
        'title',
        'phone',
        'city',
        'state_region',
        'country',
        'current_customer_partner',
        'cortexdecoder',
        'epic_id_number',
        'already_talked_to_rep',
        'are_you_a_student',
        'are_you_a_vendor',
        'accept_terms',
        'referral',
        'lead_source',
        'product_interest',
        'license_key',
        'w_2_lcc',
        'agent_1',
        'agent_2',
        'salesforce',
        'salesrep_email',
        'description',
        'last_login',
        'contract_agreed',
        'contract_agreed_date',
        'contract_form_sent',
        'consulted',
        'display_name',
        'team_id',
        'sales_rep_id',
        'industy_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'approved' => 'boolean',
        'company' => 'string',
        'title' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'state_region' => 'string',
        'country' => 'string',
        'current_customer_partner' => 'string',
        'cortexdecoder' => 'string',
        'epic_id_number' => 'string',
        'already_talked_to_rep' => 'string',
        'are_you_a_student' => 'string',
        'are_you_a_vendor' => 'string',
        'accept_terms' => 'boolean',
        'referral' => 'string',
        'lead_source' => 'string',
        'product_interest' => 'string',
        'license_key' => 'string',
        'w_2_lcc' => 'boolean',
        'agent_1' => 'string',
        'agent_2' => 'string',
        'salesforce' => 'string',
        'salesrep_email' => 'string',
        'description' => 'string',
        'last_login' => 'datetime',
        'contract_agreed' => 'boolean',
        'contract_agreed_date' => 'date',
        'contract_form_sent' => 'string',
        'consulted' => 'boolean',
        'display_name' => 'string',
        'team_id' => 'integer',
        'sales_rep_id' => 'integer',
        'industy_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'approved' => 'nullable|boolean',
        'company' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'city' => 'nullable|string|max:255',
        'state_region' => 'nullable|string|max:255',
        'country' => 'required|string|max:255',
        'current_customer_partner' => 'required|string|max:255',
        'cortexdecoder' => 'required|string|max:255',
        'epic_id_number' => 'required|string|max:255',
        'already_talked_to_rep' => 'required|string|max:255',
        'are_you_a_student' => 'required|string|max:255',
        'are_you_a_vendor' => 'required|string|max:255',
        'accept_terms' => 'nullable|boolean',
        'referral' => 'nullable|string|max:255',
        'lead_source' => 'nullable|string|max:255',
        'product_interest' => 'nullable|string|max:255',
        'license_key' => 'nullable|string|max:255',
        'w_2_lcc' => 'nullable|boolean',
        'agent_1' => 'nullable|string|max:255',
        'agent_2' => 'nullable|string|max:255',
        'salesforce' => 'nullable|string|max:255',
        'salesrep_email' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'last_login' => 'nullable',
        'contract_agreed' => 'nullable|boolean',
        'contract_agreed_date' => 'nullable',
        'contract_form_sent' => 'nullable|string|max:255',
        'consulted' => 'nullable|boolean',
        'display_name' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'team_id' => 'nullable',
        'sales_rep_id' => 'nullable',
        'industy_id' => 'nullable',
        'user_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function industy()
    {
        return $this->belongsTo(\App\Models\Industry::class, 'industy_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function salesRep()
    {
        return $this->belongsTo(\App\Models\Staff::class, 'sales_rep_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function team()
    {
        return $this->belongsTo(\App\Models\Team::class, 'team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
