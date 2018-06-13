# Example Muffin/Webservice application

This is an example application for testing the Muffin/Webservice plugin.

## Install
* Clone the repo using Git.
* `composer install`

## Examples
* Single item web service request on `/single`
* Multiple item web service request on `/multiple`

## Relevant plugin changes

### Datasources
https://github.com/davidyell/Example-MuffinWebservice/blob/master/config/app.default.php#L312-L322

### Drivers
https://github.com/davidyell/Example-MuffinWebservice/tree/master/src/Webservice/Driver

### Webservices
https://github.com/davidyell/Example-MuffinWebservice/tree/master/src/Webservice

### Endpoints
https://github.com/davidyell/Example-MuffinWebservice/tree/master/src/Model/Endpoint

### Controllers
Single request, https://github.com/davidyell/Example-MuffinWebservice/blob/master/src/Controller/AnswersController.php  
Multiple request, https://github.com/davidyell/Example-MuffinWebservice/blob/master/src/Controller/BankHolidaysController.php
