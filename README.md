# Laravel Role Permission Management System - Laravel `11.x`

A project which manage Role, Permissions and every actions of your Laravel application. A complete solution for Role based Access Control in Laravel.

**Demo:** http://localhost:8000
```
Username - superadmin
password - 12345678
```

## Requirements:
- Laravel `7.x` | `9.7` | `11.x`
- Spatie role permission package  `^6.4`
- PHP `8.x` 



## Project Setup
Git clone -
```console
git clone https://github.com/anharsaja/wuluhan-site.git
```

Go to project folder -
```console
cd wuluhan-site
```

Install Laravel Dependencies -
```console
composer install
```

Create database called - `laravel_role`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```



## How it works
1. Login using Super Admin Credential -
    1. Username - `superadmin`
    1. Password - `123123`
2. Create Admin
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.
7. If you've not enough permission to do any task, you'll get a warning message.

## Learn More & Discussion
https://devsenv.com/tutorials/laravel-role-permission-management-system-full-example-with-source-code



### Login & Dashboard Page
![alt text][adminLoginImage]
![alt text][dashboardImage]

### Role Pages
Role List
![alt text][roleListImage]
Role Create
![alt text][roleCreateImage]
Role Edit
![alt text][roleEditImage]

### Admin Pages
Admin List
![alt text][adminListImage]

### Other Pages
Custom Error Pages
![alt text][errorPageImage]



[dashboardImage]: https://i.ibb.co.com/nL9xyHn/dashboard.png "Dashboard Page Laravel Role Management"
[roleListImage]: https://i.ibb.co.com/NyrpQ0T/roles.png "2-Laravel-Manage-Roles"
[roleCreateImage]: https://i.ibb.co.com/JFmYpd4/createroles.png "3-Laravel-Role-Create"
[roleEditImage]: https://i.ibb.co.com/FBn41Ct/editroles.png "4-Laravel-Role-Edit"
[adminListImage]: https://i.ibb.co.com/BZMVLFM/admin.png "5-Laravel-Admin-Manage"
[adminLoginImage]: https://i.ibb.co.com/bWgQqhT/login.png "7-Login-Page"
[errorPageImage]: https://i.ibb.co/HYcvRH4/8-Error-Page-Handle.png "8 - Error Page Handling"

## Wanna talk with me
Please mail me at : ...


## Support
If you like my work you may consider buying me a ☕ / 🍕


## Contribution
Contribution is open. Create Pull-request and I'll add it to the project if it's good enough.
