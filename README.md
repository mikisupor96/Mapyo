# [Mapyo](https://mapyo.herokuapp.com/)
*Your one-stop for general country-specific information*

## What is Mapyo?

Mapyo is an application that provides users with general information about countries worldwide. It uses a combination of HTML, JavaScript, jQuery, and Bootstrap on the front-end and PHP on the back-end. The script file makes AJAX requests to various PHP files, each of which retrieves data from different APIs and locally stored JSON data. Additionally, location data is retrieved using the built-in JavaScript API. For instance:
* Country flag
* Capital City
* Spoken Language
* Region 
* Currency
* Population
* General Wiki Description
* Weather data such as:
  * Humidity
  * Pressure
  * Wind speed
* News:
  * Article Image
  * Description 
  * Liks for more information
* Coronavirus Data:
* Movies in the country:
  * Title
  * Genre
  * Seasons
  * Whether it is still running or not
 
## How does it work?

Upon visiting the website for the first time, the user will receive a prompt to select their current location. If location services are enabled, the user's country will be automatically detected. If not, the user can choose from a selection bar at the top of the page that lists all countries around the world. The user will have three attempts to select their country, as the app uses API keys that may limit data availability after a certain number of users. Additionally, by clicking on the cities displayed on the map, the user can access a link to a live camera feed of that city.



