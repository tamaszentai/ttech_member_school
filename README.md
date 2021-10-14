<ol>
 <li> Make sure composer is installed on your machine (<a href="https://getcomposer.org/download/">Download here</a>)</li>
<br>
<li> For MySQL database download and install XAMPP (<a href="https://www.apachefriends.org/index.html">Download here</a>)</li>
<br>
<li> Using the XAMPP Control Panel Start Apache and MySQL </li>
<br>
<li> Using the XAMPP Control panel click on Admin then using the phpMyAdmin create a new database named: toucantech</li>
<br>
<li> Download/Clone the this Github repo </li>
<br>
<li> In the terminal/windows command prompt navigate to the downloaded/cloned folder then run the following commands:
</br>
<ol>
<li> php artisan migrate  (creating the tables in the database)</li> <br>
<li> php artisan db:seed  (inserting some records into the tables)</li> <br>
<li> php artisan serve   (starting laravel development server) </li> <br>
</ol>
</li>
<li> In the browser navigate to http://127.0.0.1:8000 </li> <br>
</ol>
