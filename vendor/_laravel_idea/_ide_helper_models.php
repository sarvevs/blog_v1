<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_PostTag_C;
    use LaravelIdea\Helper\App\Models\_IH_PostTag_QB;
    use LaravelIdea\Helper\App\Models\_IH_Post_C;
    use LaravelIdea\Helper\App\Models\_IH_Post_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $title
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $content
     * @property int|null $category_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method static _IH_Post_C|Post[] all()
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}
    
    /**
     * @property int $id
     * @property int $post_id
     * @property int $tag_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PostTag_QB onWriteConnection()
     * @method _IH_PostTag_QB newQuery()
     * @method static _IH_PostTag_QB on(null|string $connection = null)
     * @method static _IH_PostTag_QB query()
     * @method static _IH_PostTag_QB with(array|string $relations)
     * @method _IH_PostTag_QB newModelQuery()
     * @method static _IH_PostTag_C|PostTag[] all()
     * @mixin _IH_PostTag_QB
     */
    class PostTag extends Model {}
    
    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method static _IH_Tag_C|Tag[] all()
     * @mixin _IH_Tag_QB
     */
    class Tag extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method static _IH_DatabaseNotification_C|DatabaseNotification[] all()
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}

namespace Laravel\Sanctum {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    
    /**
     * @property int $id
     * @property int $tokenable_id
     * @property string $tokenable_type
     * @property string $name
     * @property string $token
     * @property array|null $abilities
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $tokenable
     * @method MorphTo tokenable()
     * @method static _IH_PersonalAccessToken_QB onWriteConnection()
     * @method _IH_PersonalAccessToken_QB newQuery()
     * @method static _IH_PersonalAccessToken_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessToken_QB query()
     * @method static _IH_PersonalAccessToken_QB with(array|string $relations)
     * @method _IH_PersonalAccessToken_QB newModelQuery()
     * @method static _IH_PersonalAccessToken_C|PersonalAccessToken[] all()
     * @mixin _IH_PersonalAccessToken_QB
     */
    class PersonalAccessToken extends Model {}
}