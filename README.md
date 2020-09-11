# About Codeigniter 4 Authentication and User Management System
A simple authentication and user management system for CodeIgniter 4

Benefits:

- Pre-built Dashboard page
- Pre-built Account page
- Pre-built Profile page
- Pre-built Settings page
- User login, User registration, Recover password functions
- User acess logs for tracking
- User Management: Register, Modify, and Delete users


Codeigniter 4 Auth and User management provides complete basic authentication system, account viewing, profile editing, and dashboard viewing.

## Getting started

### Installation

1. Download or clone the repo to your desktop.
2. Change directory `cd my-app`
3. Import `my-app/database.sql` to your MySQL or MariaDB Server, create a user and grant all rights to the imported `DB`
4. Rename `.env.example` to `.env`
5. Change the App url to `app.baseURL = 'http://localhost/my-app/public/'`
6. Update database config, change the lines at `database.default.database =`, `database.default.username =`, `database.default.password`, and `database.default.hostname =` in .env file.
7. Run `php spark serve` to open live application.
8. Alternatively, you can browse the app using a web browser, enter this URL address `http://localhost/my-app/public`.
9. Login using sample account usernaeme `admin@example.com`, password `admin`

### System Requirements

1. `PHP` >= 7.1.3
2. `MySQL` 5.x or newer versions
3. `Nginx` or `Apache` (recommended) http server
4. Required PHP extensions: `OpenSSL`, `PDO`, `Mbstring`, `Tokenizer`, `Ctype`, `JSON`

If you are running on local development, we recommend using `AMPPS` stack which has all the system requirements [Download AMPPS](https://www.ampps.com/downloads) available in Windows, Mac, Linux Installers.

## Screenshots
![PHP Attendance Management System - Manager Dashboard](https://i.postimg.cc/5NbGZpJY/manager-dashboard.png)

## Contributing

Thank you for considering contributing to the Codeigniter 4 Auth and User management!

## Security Vulnerabilities

If you discover a security vulnerability within Codeigniter 4 Auth and User management, please submit a pull request. All security vulnerabilities will be promptly addressed.

## License

The Codeigniter 4 Auth and User management is open-source software licensed under the [Apache license 2.0](http://www.apache.org/licenses/LICENSE-2.0).

Copyright (c) 2020-present, Alexis Luna
