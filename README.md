# PHP Backend

## Postman documentation
https://documenter.getpostman.com/view/4399404/Tzedh4yu#8f97ba6f-e5db-490b-960a-f2a0d65e7737

## Live API testing
1. **Check Palindrome** : **GET** => https://polar-tor-69800.herokuapp.com/api/palindrome?input=no+lemons,+no+melon
```javascript
Query = "?input=no+lemons,+no+melon"
Params = N/A
Body = N/A
Headers = {
    Key: X-Requested-With,
    Value: XMLHttpRequest
}
Example result =
{
    "is_palindrome": true
}
```

2. **Merge word** : **POST** => https://polar-tor-69800.herokuapp.com/api/merge-word
```javascript
Query = N/A
Params = N/A
Body = {
    "input": "AAA DDA ADA",
    "div": 3
}
Headers = {
    Key: X-Requested-With,
    Value: XMLHttpRequest
}
Example result =
{
    "result": [
        "A",
        "DA",
        "AD"
    ]
}
```

## How to run this project on local environment
1. Make sure [nodeJS](https://nodejs.org/en/download/) and [npm](https://nodejs.org/en/download/) installed on the local machine
2. Download or clone project to the local machine, example: ```D:\php-backend-test```
3. Open command prompt on local machine and the directory must directed to the project, example: ```D:\php-backend-test>```
4. Type ```npm install``` in command prompt and wait until finish
5. Type ```php artisan serve``` in command prompt to start run server at http://localhost:8000