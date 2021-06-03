Welcome to the Studio Management Project!

Local Environment Installation (Laragon):

1. `git clone https://github.com/BIT-Studio-3/group-project-21-1-budget-marvel-avengers.git` into the laragon www directory
2. Launch Laragon
3. Run all
4. Open Terminal in project root
5. `cp .env.example .env`
6. Open database management software and create a new database called "StudioManagement"
7. `composer install`
8. New terminal -> `npm i`
9. New terminal -> `php artisan migrate:fresh`
10. New terminal -> `php artisan tinker` then `DB::table('users')->insert(['name'=>'Admin','email'=>'admin@op.ac.nz','password'=>Hash::make('studioadmin')]);`
11. Login using username: Admin password: studioadmin
