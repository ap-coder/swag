<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(schema="WhitePaper", required={"title"},
 *  @OA\Property(property="id", description="id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="title", description="title", type="string"),
 *  @OA\Property(property="published", description="published", type="boolean"),
 *  @OA\Property(property="page_text", description="page_text", type="string"),
 *  @OA\Property(property="excerpt", description="excerpt", type="string"),
 *  @OA\Property(property="slug", description="slug", type="string"),
 *  @OA\Property(property="meta_title", description="meta_title", type="string"),
 *  @OA\Property(property="meta_description", description="meta_description", type="string"),
 *  @OA\Property(property="facebook_title", description="facebook_title", type="string"),
 *  @OA\Property(property="facebook_desc", description="facebook_desc", type="string"),
 *  @OA\Property(property="twitter_post_title", description="twitter_post_title", type="string"),
 *  @OA\Property(property="twitter_post_description", description="twitter_post_description", type="string"),
 *  @OA\Property(property="contributor", description="contributor", type="string"),
 *  @OA\Property(property="contributor_link", description="contributor_link", type="string"),
 *  @OA\Property(property="contributor_2", description="contributor_2", type="string"),
 *  @OA\Property(property="contributor_2_link", description="contributor_2_link", type="string"),
 *  @OA\Property(property="created_at", description="created_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="updated_at", description="updated_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="deleted_at", description="deleted_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="author_id", description="author_id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="status_id", description="status_id", type="integer",
 *          format="int32")
 * )
 */
class WhitePaper extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'white_papers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'published',
        'page_text',
        'excerpt',
        'slug',
        'meta_title',
        'meta_description',
        'facebook_title',
        'facebook_desc',
        'twitter_post_title',
        'twitter_post_description',
        'contributor',
        'contributor_link',
        'contributor_2',
        'contributor_2_link',
        'author_id',
        'status_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'published' => 'boolean',
        'page_text' => 'string',
        'excerpt' => 'string',
        'slug' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'facebook_title' => 'string',
        'facebook_desc' => 'string',
        'twitter_post_title' => 'string',
        'twitter_post_description' => 'string',
        'contributor' => 'string',
        'contributor_link' => 'string',
        'contributor_2' => 'string',
        'contributor_2_link' => 'string',
        'author_id' => 'integer',
        'status_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'published' => 'nullable|boolean',
        'page_text' => 'nullable|string',
        'excerpt' => 'nullable|string',
        'slug' => 'nullable|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:255',
        'facebook_title' => 'nullable|string|max:255',
        'facebook_desc' => 'nullable|string|max:255',
        'twitter_post_title' => 'nullable|string|max:255',
        'twitter_post_description' => 'nullable|string|max:255',
        'contributor' => 'nullable|string|max:255',
        'contributor_link' => 'nullable|string|max:255',
        'contributor_2' => 'nullable|string|max:255',
        'contributor_2_link' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'author_id' => 'nullable',
        'status_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function author()
    {
        return $this->belongsTo(\App\Models\Staff::class, 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function contentCategories()
    {
        return $this->belongsToMany(\App\Models\ContentCategory::class, 'content_category_white_paper');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function contentTags()
    {
        return $this->belongsToMany(\App\Models\ContentTag::class, 'content_tag_white_paper');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'product_white_paper');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function videoContents()
    {
        return $this->belongsToMany(\App\Models\VideoContent::class, 'video_content_white_paper');
    }
}
