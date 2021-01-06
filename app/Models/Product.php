<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(schema="Product", required={""},
 *  @OA\Property(property="id", description="id", type="integer",
 *          format="int32"),
 *  @OA\Property(property="name", description="name", type="string"),
 *  @OA\Property(property="description", description="description", type="string"),
 *  @OA\Property(property="short", description="short", type="string"),
 *  @OA\Property(property="demo_request_link", description="demo_request_link", type="string"),
 *  @OA\Property(property="demo_form", description="demo_form", type="string"),
 *  @OA\Property(property="slug", description="slug", type="string"),
 *  @OA\Property(property="type", description="type", type="string"),
 *  @OA\Property(property="chicklet", description="chicklet", type="string"),
 *  @OA\Property(property="published", description="published", type="boolean"),
 *  @OA\Property(property="meta_title", description="meta_title", type="string"),
 *  @OA\Property(property="meta_description", description="meta_description", type="string"),
 *  @OA\Property(property="facebook_title", description="facebook_title", type="string"),
 *  @OA\Property(property="facebook_desc", description="facebook_desc", type="string"),
 *  @OA\Property(property="twitter_post_title", description="twitter_post_title", type="string"),
 *  @OA\Property(property="twitter_post_description", description="twitter_post_description", type="string"),
 *  @OA\Property(property="notes_section", description="notes_section", type="string"),
 *  @OA\Property(property="mpn", description="mpn", type="string"),
 *  @OA\Property(property="sku", description="sku", type="string"),
 *  @OA\Property(property="demo_button_text", description="demo_button_text", type="string"),
 *  @OA\Property(property="cta_button_text", description="cta_button_text", type="string"),
 *  @OA\Property(property="cta_url", description="cta_url", type="string"),
 *  @OA\Property(property="created_at", description="created_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="updated_at", description="updated_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="deleted_at", description="deleted_at", type="string",
 *          format="date-time"),
 *  @OA\Property(property="status_id", description="status_id", type="integer",
 *          format="int32")
 * )
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'short',
        'demo_request_link',
        'demo_form',
        'slug',
        'type',
        'chicklet',
        'published',
        'meta_title',
        'meta_description',
        'facebook_title',
        'facebook_desc',
        'twitter_post_title',
        'twitter_post_description',
        'notes_section',
        'mpn',
        'sku',
        'demo_button_text',
        'cta_button_text',
        'cta_url',
        'status_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'short' => 'string',
        'demo_request_link' => 'string',
        'demo_form' => 'string',
        'slug' => 'string',
        'type' => 'string',
        'chicklet' => 'string',
        'published' => 'boolean',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'facebook_title' => 'string',
        'facebook_desc' => 'string',
        'twitter_post_title' => 'string',
        'twitter_post_description' => 'string',
        'notes_section' => 'string',
        'mpn' => 'string',
        'sku' => 'string',
        'demo_button_text' => 'string',
        'cta_button_text' => 'string',
        'cta_url' => 'string',
        'status_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'short' => 'nullable|string',
        'demo_request_link' => 'nullable|string|max:255',
        'demo_form' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:255',
        'chicklet' => 'nullable|string|max:255',
        'published' => 'nullable|boolean',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string',
        'facebook_title' => 'nullable|string|max:255',
        'facebook_desc' => 'nullable|string',
        'twitter_post_title' => 'nullable|string|max:255',
        'twitter_post_description' => 'nullable|string',
        'notes_section' => 'nullable|string',
        'mpn' => 'nullable|string|max:255',
        'sku' => 'nullable|string|max:255',
        'demo_button_text' => 'nullable|string|max:255',
        'cta_button_text' => 'nullable|string|max:255',
        'cta_url' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'status_id' => 'nullable'
    ];

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
    public function caseStudies()
    {
        return $this->belongsToMany(\App\Models\CaseStudy::class, 'case_study_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function docs()
    {
        return $this->belongsToMany(\App\Models\Doc::class, 'doc_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function faqQuestions()
    {
        return $this->belongsToMany(\App\Models\FaqQuestion::class, 'faq_question_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function features()
    {
        return $this->belongsToMany(\App\Models\Feature::class, 'feature_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function files()
    {
        return $this->belongsToMany(\App\Models\File::class, 'file_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function firmware()
    {
        return $this->belongsToMany(\App\Models\Firmware::class, 'firmware_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function industries()
    {
        return $this->belongsToMany(\App\Models\Industry::class, 'industry_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function infographics()
    {
        return $this->belongsToMany(\App\Models\Infographic::class, 'infographic_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function lessons()
    {
        return $this->belongsToMany(\App\Models\Lesson::class, 'lesson_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function mCodeCategories()
    {
        return $this->belongsToMany(\App\Models\MCodeCategory::class, 'm_code_category_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function news()
    {
        return $this->belongsToMany(\App\Models\News::class, 'news_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function posts()
    {
        return $this->belongsToMany(\App\Models\Post::class, 'post_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productCategories()
    {
        return $this->belongsToMany(\App\Models\ProductCategory::class, 'product_product_category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productModels()
    {
        return $this->belongsToMany(\App\Models\ProductModel::class, 'product_product_model');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productSections()
    {
        return $this->belongsToMany(\App\Models\ProductSection::class, 'product_product_section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productTags()
    {
        return $this->belongsToMany(\App\Models\ProductTag::class, 'product_product_tag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function promos()
    {
        return $this->belongsToMany(\App\Models\Promo::class, 'product_promo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function software()
    {
        return $this->belongsToMany(\App\Models\Software::class, 'product_software');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function testimonials()
    {
        return $this->belongsToMany(\App\Models\Testimonial::class, 'product_testimonial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function videoContents()
    {
        return $this->belongsToMany(\App\Models\VideoContent::class, 'product_video_content');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function whitePapers()
    {
        return $this->belongsToMany(\App\Models\WhitePaper::class, 'product_white_paper');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class, 'products_id');
    }
}
