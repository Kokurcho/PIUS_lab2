# PHP Lab 2
## Technologies:
- PHP
- Laravel Framework
- Postgres
- Custom console commands
## Task
To implement two pages and a console command
-Product page uXXXXXX-lab2.local/products/{code}
In the list, display all the product fields including the image as <img>
- Catalog category page uXXXXXX-lab2.local/category/{code}
If the category is not active, then the application should return a 404
error code.
On the page, display a list of all products in this category.
Implement page-by-page navigation and filter by product price
- php artisan product console command:category {id}
The console command should return the character code of the category y
a product with an id equal to {id}
