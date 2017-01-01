<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostTags
 *
 * @property int $id
 * @property int $post_id
 * @property string $tag_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PostTags whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PostTags wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PostTags whereTagId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PostTags whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PostTags whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostTags extends Model
{
    //
}
