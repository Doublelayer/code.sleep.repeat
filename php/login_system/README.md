# PHP Register & Login System

1. Create Tables

   - [users](sql/database_template/users.sql)
   - [users_sessions](sql/database_template/users_sessions.sql)
   - [groups](sql/database_template/groups.sql)

2. Import Groups to table groups

   - INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES (NULL, 'Standard user', '');
   - INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES (NULL, 'Administrator', '{"admin": 1}');

3. Create Folders

   - classes
   - core
   - functions
   - includes

4. Create Files in root

   - index.html
   - login.php
   - logout.php
   - profile.php
   - register.php
   - update.php
   - changepassword.php

5. Inside classes folder create

   - Config.php
   - Cookie.php
   - DB.php
   - Hash.php
   - Input.php
   - Redirect.php
   - Session.php
   - Token.php
   - User.php
   - Validation.php

6. Inside core folder create

   - init.php

7. Inside functions create
