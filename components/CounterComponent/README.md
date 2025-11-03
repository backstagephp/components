# Laravel Component Template

This repository template streamlines the creation of new Laravel components as installable Composer packages, making them ready for use in any Laravel app.

## Creating a New Component

To create your own component, follow these steps:

### Step 1: Set Up a New Component Repository

Click **Use this template** to create a new repository named `laravel-[component]-component` (e.g., `laravel-dummy-component`).

### Step 2: Clone the repository

Clone the repository to your local system.

### Step 3: Manual Installation Steps

_No install command is available yet, so the following steps must be completed manually._

1. **Remove the following files:**

   - `README.md`
   - `COMPONENT_DEVELOPMENT.md`
   - `TODO.md`

2. **Rename the following files:**

   - `COMPONENT_INSTALLATION.md` to `README.md`
   - `src/DummyServiceProvider.php` to `src/[Component]ServiceProvider.php`
   - `src/Components/Dummy.php` to `src/Components/[Component].php`
   - `resources/css/type-variant.css` to `resources/css/[type]-[variant].css`
   - `resources/js/type-variant.js` to `resources/js/[type]-[variant].js`
   - `resources/views/type-variant/dummy.blade.php` to `resources/views/[type]-[variant]/[component].blade.php`

3. **Run a find and replace with `match case` in all files:**

   - `laravel-component-template` > `laravel-[component]-component`
   - `dummy` > `[component]`
   - `Dummy` > `[Component]`
   - `type-variant` > `[type]-[variant]`
   - `TypeVariant` > `[Type][Variant]`

4. **Find all occurrences of // ! and take action on them**

5. **Add your name to the `authors` in `composer.json`**

### Step 4: Development

Refer to [COMPONENT_DEVELOPMENT.md](COMPONENT_DEVELOPMENT.md) for development instructions.
