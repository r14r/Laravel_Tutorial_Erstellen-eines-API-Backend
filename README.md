
## Starter App

```
laravel new StarterApp  --jet 
                        --api 
                        --database sqlite 
                        --stack livewire  
                        --teams 
                        --dark 
                        --verification 
                        --git 
                        --pest
```


```
php artisan make:model Post --migration --controller --seed --api --requests --pest
```

## ❯ php artisan make:model Post --all --pest

   INFO  Model and test [app/Models/Post.php] created successfully.

   INFO  Factory [database/factories/PostFactory.php] created successfully.

   INFO  Migration [database/migrations/2024_04_19_072542_create_posts_table.php] created successfully.

   INFO  Seeder [database/seeders/PostSeeder.php] created successfully.

   INFO  Request [app/Http/Requests/StorePostRequest.php] created successfully.

   INFO  Request [app/Http/Requests/UpdatePostRequest.php] created successfully.

   INFO  Controller and test [app/Http/Controllers/PostController.php] created successfully.

   INFO  Policy [app/Policies/PostPolicy.php] created successfully.

## ❯ php artisan make:model Post --migration --controller --seed --api --requests --pest

   INFO  Model and test [app/Models/Post.php] created successfully.

   INFO  Migration [database/migrations/2024_04_19_072300_create_posts_table.php] created successfully.

   INFO  Seeder [database/seeders/PostSeeder.php] created successfully.

   INFO  Request [app/Http/Requests/StorePostRequest.php] created successfully.

   INFO  Request [app/Http/Requests/UpdatePostRequest.php] created successfully.

   INFO  Controller and test [app/Http/Controllers/PostController.php] created successfully.

## ❯ php artisan make:model PostAll --all

   INFO  Model [app/Models/PostAll.php] created successfully.

   INFO  Factory [database/factories/PostAllFactory.php] created successfully.

   INFO  Migration [database/migrations/2024_04_19_072406_create_post_alls_table.php] created successfully.

   INFO  Seeder [database/seeders/PostAllSeeder.php] created successfully.

   INFO  Request [app/Http/Requests/StorePostAllRequest.php] created successfully.

   INFO  Request [app/Http/Requests/UpdatePostAllRequest.php] created successfully.

   INFO  Controller [app/Http/Controllers/PostAllController.php] created successfully.

   INFO  Policy [app/Policies/PostAllPolicy.php] created successfully.
