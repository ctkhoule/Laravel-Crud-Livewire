# Laravel CRUD - Jetstream Livewire

Une application CRUD Laravel utilisant __Jetstream__ avec __Livewire__.

- __Jetstream__
Jetstream est un kit de démarrage d'application magnifiquement conçu pour Laravel et fournit le point de départ idéal pour votre prochaine application Laravel. Jetstream fournit la mise en œuvre pour la connexion de votre application, l'enregistrement, la vérification des e-mails, l'authentification à deux facteurs, la gestion de session, l'API via Laravel Sanctum et des fonctionnalités de gestion d'équipe en option.

Documentation de Jetstream disponible [ICI](https://laravel-livewire.com/docs/2.x/quickstart)

- __Livewire__
Livewire est un framework full-stack pour Laravel qui simplifie la création d'interfaces dynamiques, sans quitter le confort de Laravel.

Documentation de Livewire disponible [ICI](https://laravel-livewire.com/docs/2.x/quickstart)


## Installer Jetstream et Livewire

    composer require laravel/jetstream

    php artisan jetstream:install livewires

- De plus, vous devez compiler les actifs, en conséquence, utilisez les deux commandes npm simultanément pour effectuer la tâche de compilation de construction.

    `npm install && npm run dev`

 - Lançez la migration

    `php artisan migrate`



![crud](https://user-images.githubusercontent.com/49252781/118413130-3b82bd80-b68d-11eb-9f30-cacba80962b5.png)
