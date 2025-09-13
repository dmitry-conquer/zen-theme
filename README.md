# ZEN Theme

**Version:** 1.0.4  
**Author:** Media Components | Dmytro Frolov  
**License:** MIT  
**PHP:** 8.2+  
**WordPress:** 6.0+

## Description

ZEN Theme is a modern, minimalistic WordPress theme skeleton with class-based architecture, designed for creating custom themes using ACF (Advanced Custom Fields). The theme provides a clean foundation for rapid development of professional websites.

## Architecture

### Class Structure
The theme uses object-oriented approach with autoloading:

```
inc/
├── Autoloader.php    # Class autoloading
├── Assets.php        # CSS/JS management
├── Setup.php         # Theme setup
├── Editor.php        # ACF editor customizations
├── Menu.php          # Menu functionality
└── Shortcodes.php    # Custom shortcodes
```

### Templates
```
templates/
├── flexible.php      # ACF Flexible Content
└── template-parts/
    ├── header-default.php
    ├── footer-default.php
    ├── content-post.php
    └── content-none.php
```

## How It Works

### 1. Initialization
```php
// functions.php
Autoloader::register();    // Autoloading
Assets::register();        // Resource loading
Setup::register();         // Theme setup
Editor::register();        // Editor
Menu::register();          // Menu
Shortcodes::register();    // Shortcodes
```

### 2. ACF Integration
```php
// Flexible Content
if (have_rows('content')) {
    while (have_rows('content')) {
        the_row();
        get_template_part('template-parts/flexible/' . get_row_layout());
    }
}
```

### 3. Template Hierarchy
- `index.php` - fallback for all pages
- `page.php` - pages
- `single.php` - single posts
- `archive.php` - archives
- `404.php` - 404 error

## Security Best Practices

### WordPress Security Functions
```php
// Output escaping
echo esc_html($text);
echo esc_attr($attribute);
echo esc_url($url);

// Input sanitization
$clean_text = sanitize_text_field($_POST['text']);
$clean_email = sanitize_email($_POST['email']);

// Nonce for forms
wp_nonce_field('action_name', 'nonce_field');
if (wp_verify_nonce($_POST['nonce_field'], 'action_name')) {
    // Safe action
}
```

### ABSPATH Check
```php
// In all PHP files (except templates)
if (!defined('ABSPATH')) {
    exit;
}
```

### Data Validation
```php
// Type checking
if (is_numeric($value)) { /* ... */ }
if (is_email($email)) { /* ... */ }
if (filter_var($url, FILTER_VALIDATE_URL)) { /* ... */ }
```

## Code Organization

### File Structure
```
zen/
├── assets/           # CSS, JS, images
├── inc/              # PHP classes
├── template-parts/   # Template parts
├── templates/        # Special templates
├── functions.php     # Main file
├── style.css         # Theme styles
└── README.md         # Documentation
```

### Naming Conventions
- **Classes:** `PascalCase` (e.g., `Setup`)
- **Methods:** `snake_case` (e.g., `register_menus`)
- **Files:** `PascalCase.php` (e.g., `Assets.php`)
- **CSS classes:** `kebab-case` (e.g., `header-nav`)

### Documentation
```php
/**
 * Function description
 *
 * @param string $param Parameter description
 * @return string Return description
 */
public static function function_name($param) {
    // Function code
}
```

## Performance

### Resource Optimization
```php
// Versioning for caching
wp_enqueue_style('style', $url, [], filemtime($file));
wp_enqueue_script('script', $url, [], filemtime($file), true);
```

### Optimization Tips
- Use minified CSS/JS
- Optimize images (WebP, proper sizes)
- Use CDN for static resources
- Enable browser caching

## ACF Best Practices

### Field Groups
- Group fields logically
- Use conditional logic
- Add field descriptions

### Flexible Content
```php
// Create separate templates for each layout
template-parts/flexible/
├── hero.php
├── text-block.php
├── gallery.php
└── cta.php
```


## License

MIT License - see [LICENSE](LICENSE) file for details.

---

**ZEN Theme** - modern foundation for WordPress development 🚀
