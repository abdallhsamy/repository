# Laravel 5 Repositories

[![Analytics](https://ga-beacon.appspot.com/UA-61050740-1/l5-repository/migration-to-2.0)](https://packagist.org/packages/abdallhsamy/repository)

## Migrate from version 1.0 to 2.0

### Registering the model's repository

*Versão 1.0*

```php
use AbdallhSamy\Repository\Eloquent\Repository;

class PostRepository extends Repository {

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

}
```

*Versão 2.0*

```php
use AbdallhSamy\Repository\Eloquent\BaseRepository;

class PostRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Post";
    }
}
```
