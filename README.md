# Sri Lankan Stats API
API that provides detailed information about Sri Lanka, including postal codes, districts, provinces, etc... 

## Setup

<details>
  <summary>Click to expand the setup instructions</summary> <br>
    
Clone the repository <br>
```
git clone https://github.com/sameera-madushan/Sri-Lankan-Stats-API.git
```

Change directories into web <br>
```
cd Sri-Lankan-Stats-API/
```

Install composer <br>
```
composer install
```

Create the .env file by duplicating the .env.example file <br>
```
cp .env.example .env
```

Set the APP_KEY value <br>
```
php artisan key:generate
```

Clear your cache & config (OPTIONAL)
``` 
php artisan cache:clear && php artisan config:clear
```

Run migrations and seeds
``` 
php artisan migrate --seed
```

Finally, run your project in the browser!
```
php artisan serve
```
</details>

## API Documentation

<details>
  <summary>Click to expand the API Documentation</summary> <br>

This project uses L5-Swagger to generate API documentation. To generate the documentation, run the following command:

```
php artisan l5-swagger:generate
```

Once generated, you can view the API documentation by visiting:

```
http://127.0.0.1:8000/api/documentation
```
</details>

## Available Endpoints

<details>
  <summary>Provinces</summary>

- **GET** `/v1/provinces`  
  Get all provinces.
  
- **GET** `/v1/provinces/get-districts/{province}`  
  Get all districts in a province.
  
- **GET** `/v1/provinces/get-cities/{province}`  
  Get all cities in a province.
  
- **GET** `/v1/provinces/get-map/{province}`  
  Get the map of a province.
  
</details>

<details>
  <summary>Districts</summary>

- **GET** `/v1/districts`  
  Get all districts.
  
- **GET** `/v1/districts/get-cities/{district}`  
  Get all cities in a district.
  
- **GET** `/v1/districts/get-province/{district}`  
  Get the province of a district.
  
- **GET** `/v1/districts/get-map/{district}`  
  Get the map of a district.
  
</details>

<details>
  <summary>Cities</summary>

- **GET** `/v1/cities`  
  Get all cities.
  
- **GET** `/v1/cities/get-district/{city}`  
  Get the district of a city.
  
- **GET** `/v1/cities/get-province/{city}`  
  Get the province of a city.
  
</details>

<details>
  <summary>Postal Codes</summary>

- **GET** `/v1/postal-codes`  
  Get all postal codes.
  
- **GET** `/v1/postal-codes/get-post-office/{postal_code}`  
  Get the post office of a postal code.
  
- **GET** `/v1/postal-codes/get-postal-code/{post_office_name}`  
  Get the postal code of a post office name.
  
</details>

<details>
  <summary>Polling Districts</summary>

- **GET** `/v1/polling-districts`  
  Get all polling districts.
  
- **GET** `/v1/polling-districts/get-polling-divisions/{polling_district}`  
  Get all polling divisions of a polling district.
  
</details>

<details>
  <summary>Polling Divisions</summary>

- **GET** `/v1/polling-divisions`  
  Get all polling divisions.
  
- **GET** `/v1/polling-divisions/get-polling-district/{polling_division}`  
  Get the polling district of a polling division.
  
</details>


  

  
