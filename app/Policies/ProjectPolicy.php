<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;
    
   
    public function view(User $user, Project $project)
    {
        return $project->owner_id == auth()->id();
    }

}
