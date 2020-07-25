# Documentation (Hotels app)
## About
OurHotels is a hotel search solution that look into many providers and display results from
all the available hotels, for now we are aggregate from two providers: BestHotels and
TopHotel

## To Run
### You will need:
- xampp
- php v 7.*
- composer
- Postman ( https://www.getpostman.com/apps )
or you can use your prefer extension to your browser for example [ RestMan for opera ](https://addons.opera.com/en/extensions/details/restman/)

## Setup / configuration
 1. clone Repo 
    - `git clone https://github.com/Ahmed-Salah7/hotels.git`
    - cd into your project
 2. Install Composer Dependencies
    - `composer install`
5. run this command `php artisan serve`
    - open your browser on this link <http://127.0.0.1:8000>
6. import postman collection file `hotel.postman_collection.json` 

## Start using API
| Name       | Method   | URL                              | Header                                                        | Body ( *RAW* ) not (form-data) |
| :----------: |:--------:| :--------------------------------: | :--------------------------------------------------------------:| :-----:|
| Hotels      | GET     | http://127.0.0.1:8000/api/hotels    | `Content-Type`: application/json <br> `Accept`: application/json|
| best-hotel   | GET     | http://127.0.0.1:8000/api/best-hotel | `Content-Type`: application/json <br> `Accept`: application/json | `Required Data`: (name, email, password, password_confirmation) <br> `Optional Data`: (null)  |
| top-hotels   | GET     | http://127.0.0.1:8000/api/top-hotels | `Content-Type`: application/json <br> `Accept`: application/json | `Required Data`: (name, email, password, password_confirmation) <br> `Optional Data`: (null)  |



## Program's Output
![N|Solid](https://i.ibb.co/6sXKc5Y/Screenshot-from-2020-07-25-17-04-17.png)

# Resources / References
##### public API about list of countries 



# License 
GNU GPL License
> Author : Ahmed Salah
