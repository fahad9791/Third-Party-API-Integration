# Third-Party-API-Integration

This application integrates with the JSONPlaceholder dummy API (https://jsonplaceholder.typicode.com) to demonstrate making API requests within a Laravel app.

The following endpoints are used:

GET /posts - Returns a list of posts
GET /posts/{id} - Returns a single post
GET /api/post - Wrong URL
POST /posts/['title', 'body'] - User to input data for posting.

Setup:

1. Clone the Repository: git clone https://github.com/fahad9791/Third-Party-API-Integration.git
2. Install dependencies: composer install
3. composer install: php artisan key:generate
4. Run the dev server: php artisan serve

Visit http://127.0.0.1:8000 in your browser to access the application.

Implemented Endpoints:

1. /getData:
Fetches data from the https://jsonplaceholder.typicode.com/posts endpoint.
Renders the getData Blade view, passing the fetched JSON data.

2. /postView:
Fetches a single post using the https://jsonplaceholder.typicode.com/posts/{id} endpoint.
Renders the postView Blade view, passing the fetched JSON data.

3. /insertData:
Renders the insertData Blade view, allowing the user to input data for posting.

4. /insertDataSubmit:
Handles the form submission from the insertData view.
Sends a POST request to https://jsonplaceholder.typicode.com/posts/ with the provided data.
Renders the postView Blade view with the JSON data of the newly inserted post.

Error Handling:

1. /wrongUrl:
Sends a GET request to the https://jsonplaceholder.typicode.com/api/posts endpoint.
Checks the HTTP status code and outputs a message indicating whether the URL is correct or not.



Why JSONPlaceholder API:
1. Free and open APIs for testing.
2. Providing a RESTful API with dummy data for various resources.
3. The endpoints return structured JSON data which is easy to consume.
The data models are flexible enough to demonstrate different types of API requests like GET, POST, PUT, etc.

Challenges:

1. The data is read-only, so I could not demonstrate POST, PUT requests to create or update resources.
