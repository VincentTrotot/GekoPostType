# GekoPostType

GekoPostType est un package permettant d'ajouter un Custom Post Type `vt_geko` à un theme WordPress.  
Ce Custom Post Type ajoute deux metadata : un nom et une url pour le fichier PDF.

La classe `VincentTrotot\Geko\GekoPostType` paramètre le Custom Post Type tandis que la classe `VincentTrotot\Geko\Geko` est une espèce de wrapper du Post (la classe hérite de la classe `Timber\TimberPost`).

## Installation

```bash
composer require vtrotot/Geko-post-type
```

## Utilisation

Votre theme doit instancier la classe `GekoPostType`

```php
new VincentTrotot\Geko\GekoPostType();
```

Vous pouvez ensuite récupérer un Post de type Geko:

```php
$post = new VincentTrotot\Geko\Geko();
```

Ou récupérer plusieurs posts avec :

```php
$args = [
    'post_type' => 'vt_geko',
    ...
];
$posts = new Timber\TimberRequest($args, VincentTrotot\Geko\Geko::class);
```
