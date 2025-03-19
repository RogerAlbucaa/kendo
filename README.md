# Hello World Kendo UI Project

This is a simple "Hello World" project using Kendo UI and PHP. The project demonstrates how to set up a basic environment with Kendo UI components.

## Project Structure

```
hello-world-kendo
├── public
│   ├── index.php
│   ├── css
│   │   └── styles.css
│   └── js
│       └── app.js
├── vendor
├── .htaccess
├── composer.json
└── README.md
```

## Requirements

1. **PHP**: Ensure you have PHP installed on your server or local environment.
2. **Composer**: Install Composer to manage project dependencies.
3. **Web Server**: Use a web server like Apache or Nginx to serve the application.

## XAMPP Information

XAMPP is a free and open-source software package that allows you to create a local web server for testing purposes.

## Setup Instructions

1. Clone the repository or create a new directory for the project.
2. Navigate to the project directory and run `composer install` to install the required dependencies, including Kendo UI.
3. Configure your web server to point to the `public` directory as the document root.
4. Access the application in your web browser by navigating to `http://your-server/index.php`.

## Environment Setup

1. Copy `.env.example` to `.env`
2. Replace `your_api_key_here` in `.env` with your OMDB API key
3. The application will automatically load the API key from the environment file

## API Configuration

The OMDB API key is stored in the `.env` file and should never be committed to version control.
To obtain an API key, visit: http://www.omdbapi.com/apikey.aspx

## Usage

Once the setup is complete, you should see a simple "Hello World" message displayed on the page, styled with Kendo UI components. You can modify the `public/css/styles.css` file to customize the styles and the `public/js/app.js` file to add more functionality.

## Localhost

http://localhost/hello-world-kendo/public/

## API

http://www.omdbapi.com/?t=Star+Wars&apikey=your_api_key_here

## API Id

http://www.omdbapi.com/?i=tt3896198&apikey=your_api_key_here

## Json Format Result

`{
   "Title":"Guardians of the Galaxy Vol. 2",
   "Year":"2017",
   "Rated":"PG-13",
   "Released":"05 May 2017",
   "Runtime":"136 min",
   "Genre":"Action, Adventure, Comedy",
   "Director":"James Gunn",
   "Writer":"James Gunn, Dan Abnett, Andy Lanning",
   "Actors":"Chris Pratt, Zoe Saldaña, Dave Bautista",
   "Plot":"The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord's encounter with his father, the ambitious celestial being Ego.",
   "Language":"English",
   "Country":"United States",
   "Awards":"Nominated for 1 Oscar. 15 wins & 61 nominations total",
   "Poster":"https://m.media-amazon.com/images/M/MV5BNWE5MGI3MDctMmU5Ni00YzI2LWEzMTQtZGIyZDA5MzQzNDBhXkEyXkFqcGc@._V1_SX300.jpg",
   "Ratings":[
      {
         "Source":"Internet Movie Database",
         "Value":"7.6/10"
      },
      {
         "Source":"Rotten Tomatoes",
         "Value":"85%"
      },
      {
         "Source":"Metacritic",
         "Value":"67/100"
      }
   ],
   "Metascore":"67",
   "imdbRating":"7.6",
   "imdbVotes":"788,570",
   "imdbID":"tt3896198",
   "Type":"movie",
   "DVD":"N/A",
   "BoxOffice":"$389,813,101",
   "Production":"N/A",
   "Website":"N/A",
   "Response":"True"
}`

## Kendo Version

"2018.3.911"