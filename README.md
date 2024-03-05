


This is a RESTful API for managing books. It allows you to perform CRUD operations on book records.

Setup Instructions

Follow these steps to set up the project locally:

Clone the repository:

git clone <repository-url>
Install dependencies:

Navigate into the project directory and run the following command to install the required dependencies:


php artisan key:generate
Run database migrations:

Run the database migrations to create the necessary tables in the database:

php artisan migrate
Start the development server:

Start the Laravel development server by running the following command:

php artisan serve
The server will start at http://localhost:8000 by default.

API Usage

You can use the following endpoints to interact with the API:

GET /api/v1/Books: Retrieve a list of all books.
POST /api/v1/Books: Create a new book.
GET /api/v1/Books/{id}: Retrieve details of a specific book.
PUT /api/v1/Books/{id}: Update details of a specific book.
DELETE /api/v1/Books/{id}: Delete a specific book.
Make sure to include the necessary parameters and data in your requests as required by each endpoint.

Sample Requests

Retrieve all books


GET /api/v1/Books
Create a new book

POST /api/v1/Books

{
  "title": "Sample Book",
  "author": "John Doe",
  "isbn": "1234567890",
  "published_date": "2022-03-04",
  "price": 19.99
}
Retrieve details of a specific book


GET /api/v1/Books/{id}
Update details of a specific book


PUT /api/v1/Books/{id}

{
  "title": "Updated Title",
  "author": "Updated Author",
  "isbn": "1234567890",
  "published_date": "2022-03-04",
  "price": 29.99
}
Delete a specific book


DELETE /api/v1/Books/{id}
Feel free to customize this content further based on your project's specific requirements.




