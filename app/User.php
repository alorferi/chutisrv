<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable{
    
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',  'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * User belongs to Roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        // belongsTo(RelatedModel, foreignKey = roles_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Role::class, 'role_users');
    }

//     /**
// * @param string|array $roles
// */
//     public function authorizeRoles($roles)
//     {
//         if (is_array($roles)) {
//             return $this->hasAnyRole($roles);
//         }
//         return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
//     }
//     *
//     * Check multiple roles
//     * @param array $roles

//     public function hasAnyRole($roles)
//     {
//         return null !== $this->roles()->whereIn(‘name’, $roles)->first();
//     }
//     /**
//     * Check one role
//     * @param string $role
//     */
//     public function hasRole($role)
//     {
//         return null !== $this->roles()->where(‘name’, $role)->first();
//     }
}
