<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    public function applicant() {
        return $this->hasOne('App\JobApplication','job_id');
    }
}
