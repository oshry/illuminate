illuminate - Case Study
=======================
simple example for illuminate router, dispatcher and database

- app starts at [public/index.php]
- loads all dependencies in [app/services]
- start application [src/Framework/Core/Application.php] method startApplication()
- we are going to implement:
  - illuminate/container
  - illuminate/routing
  - illuminate/events
  - illuminate/database[illuminate/app/classes/Controllers/HomeController.php]
 
!!!!!remember to use phpdotenv package for loading environment variables from `.env` to `getenv()!!!!


ref:
[http://www.richardbagshaw.co.uk/using-illuminate-components/]