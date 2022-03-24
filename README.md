e-commerce project do with PHP HTML CSS databases MYSQL.
My shop is an e-commerce site that can allow these users to register, connect and disconnect.
The admin can see all users and delete them.
After cloning the repo, you can run the project with php -S localhost:5000, port 5000 can be changed, you are free.

You must connect to the database by executing the file my_shop.sql with: source <the path to file my_shop.sql>
Of course you must be in your shell mysql.

Don't forget to change the password in the connecxion.php file to your mysql password.
To log in as admin you must update one of your users to admin with the following command in mysql: update users set admin=1 where email="?" the email of the user you want to make admin. And log in with this account.
