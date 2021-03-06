<?php

namespace App\Models\Comments;

use Illuminate\Database\Eloquent\Model;

class CommentsSong extends Model
{
    /**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function user() {
		return $this->belongsTo('App\Models\Auth\User');
	}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function songs()
    {
        return $this->belongsTo('App\Models\Pages\Songs');
	}
}
