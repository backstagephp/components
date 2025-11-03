# A collection of beautiful website components.

From the makers of Backstage.

## Installation
```bash
composer require backstage/components
```

Add the following code to app.js.
```js
import.meta.glob('../views/components/**/*.css', { eager: true });
import.meta.glob('../views/components/**/*.js', { eager: true });
```

Publishes a component
```bash
php artisan backstage:component {component? : The component to use}
```

## Add new component

```bash
git subtree add --prefix components/CounterComponent git@github.com:backstagephp/Counter-Component.git main --squash
```