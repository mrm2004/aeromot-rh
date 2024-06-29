<?php

namespace App\Policies;

use App\Models\FeedBackProfessional;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FeedBackProfessionalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, FeedBackProfessional $feedBackProfessional): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, FeedBackProfessional $feedBackProfessional): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, FeedBackProfessional $feedBackProfessional): bool
    {
        return true;
    }

}
