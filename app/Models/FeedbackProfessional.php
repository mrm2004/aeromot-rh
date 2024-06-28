<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBackProfessional extends Model
{
    use HasFactory;

    protected $table = 'feedbackprofessional';

    protected $fillable = [
        'staf_id',
        'user_id',
        'office',
        'staffer',
        'rating',
        'receptive_leader_obs',
        'receptive_leader_rating',
        'receive_feedback_obs',
        'receive_feedback_rating',
        'answers_questions_obs',
        'answers_questions_rating',
        'comunication_obs',
        'comunication_rating',
        'trust_obs',
        'trust_rating',
        'team_development_obs',
        'team_development_rating',
        'autonomy_obs',
        'autonomy_rating',
        'healthy_relationship_obs',
        'healthy_relationship_rating',
        'observations',
        'evolution_obs',
    ];

    public function staf()
    {
        return $this->belongsTo(Staff::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
