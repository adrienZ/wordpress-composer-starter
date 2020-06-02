# installation

```
mkdir my-site
cd my-site
curl -L -o master.zip https://github.com/adrienZ/wordpress-composer-starter/archive/master.zip && unzip master.zip && rm master.zip && mv ./wordpress-composer-starter-master/{.,}* ./ && rm -r ./wordpress-composer-starter-master
```

1. run `composer install`
2. At the root of your project, copy  the `wp-config-sample.php` file as `wp-config.php` and connect to your database.
3. In the wp-config file, add theses lines on the top of your file:
```php
$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];
$dir = basename(__DIR__);

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', $url . '/' . $dir . '/wp-content' );
// define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins' );
// define( 'WP_PLUGIN_URL', $url . '/' . $dir . '/wp-content/plugins' );
// define( 'UPLOADS', $url . '/' . $dir . '/wp-content/uploads' );
```
4. Go to `yoursite.com/wordpress/wp-admin/options-permalink.php` and hit the button `Save Changes` (it should generate your `.htaccess`)
5. You're ready to go  !
