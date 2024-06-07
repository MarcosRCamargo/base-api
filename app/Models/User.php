<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

/**
 * Class User
 *
 * @OA\Schema(
 *     title="User model",
 *     description="User model",
 * )
 */
class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="ID",
     *     title="ID",
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *     description="Name",
     *     title="Name",
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     format="email",
     *     description="Email",
     *     title="Email",
     * )
     *
     * @var string
     */
    private $email;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="Password",
     *     title="Password",
     *     maximum=255
     * )
     *
     * @var string
     */
    private $password;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];
}
