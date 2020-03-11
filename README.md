#### Install

```composer require moodrain/laravel-streamer```

#### Usage

```
use Moodrain\LaravelStreamer\Streamer;

class Controller {
    public function video() {
        return Streamer::stream(storage_path('demo.mp4'));
    }
}
```

#### Config

```
php artisan vendor:publish --provider="Moodrain\LaravelStreamer\ServiceProvider"
```

edit ```config/laravel_streamer.php```

```
return [
    'buffer' => 2 * 1024 * 1024
];
```

set buffer size you wish, 2 MB is default size
