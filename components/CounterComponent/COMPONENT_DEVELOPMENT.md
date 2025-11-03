# Component Development Guide

This guide provides the setup and configuration steps required to develop your Laravel component after creating a repository from the template. Follow these instructions to configure dependencies, customize settings, and begin developing your component.

## Prerequisites

Follow these steps to install and configure the component in your **Laravel app**.

### Dependencies

This component relies on the following NPM packages:

- [TailwindCSS](https://tailwindcss.com/)

Install the necessary packages with the following command:

```bash
npm i -D tailwindcss@^4.0.0
npx tailwindcss init
```

### Laravel app configuration

1. **Add Aliases**: Update `vite.config.js` with the following aliases:

   ```js
   import path from "path";

   export default defineConfig({
     resolve: {
       alias: {
         "@vendor": path.resolve(__dirname, "vendor"),
         "@modules": path.resolve(__dirname, "node_modules"),
       },
     },
   });
   ```

2. **Add Tailwind Content Path**: Update `tailwind.css` to include this content path for compiling:

   ```css
   @source "../../vendor/vormkracht10/laravel-[component]-component/resources/";
   ```

3. **Live Development**: Instantly reflect any code changes in your component folder

   Create a symlink to this package in `composer.json`. You can do this by using our [`package` command](#package-command) or following the steps below.

   **Step 1: Set Up a New Component Repository**

   ```json
   {
     "repositories": [
       {
         "type": "path",
         "url": "~/Sites/laravel-[component]-component",
         "options": {
           "symlink": true
         }
       }
     ]
   }
   ```

   **Step 2: Install the package**

   Install the package with development stability using the following command:

   `composer require vormkracht10/laravel-[component]-component`

## Component installation

Clone your repository into your `~/Sites/` folder:

```bash
cd ~/Sites/
git clone git@github.com:vormkracht10/laravel-[component]-component.git
```

To use it, import the necessary scripts for your chosen variant in `app.js`:

```js
import "@vendor/vormkracht10/laravel-[component]-component/resources/js/[type]-[variant].js";
```

Then, add the component to a Blade file:

```php
<x-[component] variant="[type]-[variant]" />
```

CSS and JavaScript changes to your component take effect only after building your Laravel app with Vite. If you set up a symlink in Step 1B, changes will automatically trigger a Vite page reload when running `npm run dev`.

## Development

### Package dependencies

As the component is not a standalone application, it does not include its own Composer or Node modules. Instead, users need to install these dependencies within their Laravel app. If your component relies on specific packages, make sure to document them in the README.md.

Eg. to load Javascript and CSS from a library, do something like this in your component:
```
import Library from "@modules/@library/library";
import "@modules/@library/library/dist/css/library.min.css";
```

### Props

Using @props in each component view is mandatory.

### Caching

To cache your component, you can use the [Laravel Permanent Cache](https://github.com/vormkracht10/laravel-permanent-cache) library:

```php
class [Component] extends CachedComponent
```

### Config file

To add a configuration file for your component, create `config/[component].php` and register it in your `[Component]ServiceProvider.php` by adding `hasConfigFile` to the package definition:

```php
$package->name('[component]')->hasConfigFile();
```

### Styling

To use TailwindCSS' `@apply`, you can leverage `@layer` as follows:

```css
@layer components {
  .[type]-[variant]-[component] {
    @apply bg-white;
  }
}
```

### Helpers

If your component requires additional helper files, you can create and import them as follows:

- **Importing Blade Helpers**:

  Place Blade helpers in `resources/views/[type]-[variant]/[helper].blade.php` and include them in your Blade file:

  ```php
  @include('[component]::[type]-[variant].[helper]', compact('data'))
  ```

- **Importing JavaScript Helpers**:

  Place JavaScript helpers in `resources/js/helpers` and import them where needed:

  ```js
  import [Helper] from './helpers/[helper]';
  ```

- **Importing CSS Helpers**:

  Place CSS helpers in `resources/css/helpers` and import them as follows:

  ```css
  @import "./helpers/[helper].css";
  ```

## Sources

### Package command

To use our `package` command, make sure to place the following in your `~/.aliases` file:

```bash
alias www="[ -L /var/www ] && [ -e /var/www ] || sudo ln -nfs ~/Sites /var/www"

package() {

    if [[ ! -f "composer.json" ]]; then
        echo "composer.json not found"
        exit 1
    fi

    www

    VENDOR="${2:-vormkracht10}"

    composer config repositories.$1 '{"type": "path", "url": "/var/www/'$1'", "options": {"symlink": true}}' --file composer.json

    composer require $VENDOR/$1
}
```
