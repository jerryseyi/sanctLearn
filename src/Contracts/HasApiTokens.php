<?php

namespace Laravel\Sanctum\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface HasApiTokens
{
    /**
     * Get the access tokens that belongs to the model.
     *
     * @return MorphMany
     */
    public function tokens(): MorphMany;

    /**
     * Determine if the current API token has a given scope.
     *
     * @param string $ability
     * @return mixed
     */
    public function tokenCan(string $ability);
}