<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'content',
        'status'
    ];

    /**
     *
     * Return the post's authors
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     *
     * Return the post's category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    /**
     *
     * Return the post's tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     *
     * Scope a query to find drafted posts
     *
     * @param $query
     * @return void
     */
    public function scopeDrafted($query)
    {
        $query->where('status', 'draft');
    }

    /**
     *
     * Scope a query to find published posts
     *
     * @param $query
     * @return void
     */
    public function scopePublished($query)
    {
        $query->where('status', 'published');
    }
}
