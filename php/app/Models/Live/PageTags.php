<?php


namespace App\Models\Live;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PoolPage
 *
 * @property int id
 * @property int iid
 * @property int parent
 * @property int pool
 * @property string slug
 * @property string description
 * @property string name
 * @property mixed status
 * @property mixed language
 * @mixin \Eloquent
 */
class PageTags extends Model implements PageAsset
{
    protected $table = 'page_tags';
    protected $primaryKey = 'id';

    protected $guarded = [];



}
