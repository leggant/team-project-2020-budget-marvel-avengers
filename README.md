Welcome to the Studio Management Project!

Developers: Anthony Legg, Conor West, Hayden McDowall, Joseph Hong and Mohammed Alhasan

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
10. By default, no users are created and for security reasons, a route to the user registration page is restricted to logged-in users. To create a user to log-in with run the following code:

New terminal -> `php artisan tinker` then `DB::table('users')->insert(['name'=>'Admin','email'=>'admin@op.ac.nz','password'=>Hash::make('studioadmin')]);`
11. Login using username: Admin password: studioadmin

Be sure to check the wiki for other notes and tidbits!
