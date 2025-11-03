# Laravel Dummy Component

This package provides a versatile, customizable dummy component for Laravel applications, featuring multiple dummy types, each with distinct variants to fit various UI needs. Easily integrate and configure a responsive dummy, with flexible options for styling, animations, and behavior. Perfect for adding dynamic, reusable navigation elements to your Laravel app.

## Prerequisites

Follow these steps to install and configure dependencies in your Laravel app.

### Dependencies

This component relies on the following NPM packages:

- [TailwindCSS](https://tailwindcss.com/)

Install both packages with the following command:

```bash
npm i -D tailwindcss@^4.0.0
npx tailwindcss init
```

### Configuration

> Intended for local or symlinked development only, not for direct use or when publishing the component.

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
   @source "../../vendor/vormkracht10/laravel-dummy-component/resources/";
   ```

## Installation

Install the component with Composer:

```bash
composer require vormkracht10/laravel-dummy-component
```

To use it, import the necessary scripts for your chosen variant in `app.js`:

**For development after publishing assets:**

```js
import "../vendor/menu/js/[type]-[variant].js";
```

**For direct usage of the component or symlinked package development:**

```js
import "@vendor/vormkracht10/laravel-dummy-component/resources/js/[type]-[variant].js";
```

Then, add the component to a Blade file:

```php
<x-dummy variant="[type]-[variant]" :items="$items" />
```

_See (available types and variants)[#types-and-variants]_

## Variables

### Required

The following variables are required for the component to show:

**$items**

Seed the component with the following item structure:

```php
$items = [
  [
    'name' => 'Item 1',
    'url' => '/item-1'
  ],
];
```

### Optional

The following variables are optional, the component should work without them:

**$options**

...

## Types and variants

### [Type]

[description]

#### [Variant]

[description]

[screenshot]

## Publishing

To publish the component's files, use the following commands. Remove any files you don't need:

```bash
php artisan vendor:publish --tag=dummy-views
php artisan vendor:publish --tag=dummy-js
php artisan vendor:publish --tag=dummy-css
```

> Note: CSS is loaded through JavaScript, so in most cases, you need to publish both JS and CSS.
