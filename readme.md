# API Documentation

## Base URL
All API requests are made to the following base URL:

---

baseurl : [MMS](mmsit.com)

## 1.Area Calculation

### **Description**
Calculates the area of a rectangle based on the given width and height.

### **Request**
- Method: `POST`
- URL: `/area.php`
- Content-Type: `application/json`

#### **Request Body**
```json
{
  "width": number,
  "height": number
}
```
#### **Response**
### **Description**

Success Response: HTTP 200 OK
```json
{
    "width": number,
    "height": number
    "area": number
}
```
## 2.Currency Exchange

### Description
Calculate the area of the given value

### **Request**
- Method: `POST`
- URL: `/exchange.php`
- Content-Type: `application/json`

#### **Request Body**
```json
{
  "from_currency": text,
  "to_currency": text,
  "amount" : number
}
```
#### **Response**
### **Description**

Success Response: HTTP 200 OK
```json
{
    "from_currencie": text,
    "to_currencie": text,
    "amount": number,
    "calculated_value": text
}
```
## 3.User upload

### Description
upload user profile

### **Request**
- Method: `POST`
- URL: `/upload.php`
- Content-Type: `multipart/form-data`

#### **Request **
#### Form Data

photo: The photo file to be uploaded.

#### **Response**
### **Description**

Success Response: HTTP 200 OK
```json
{
    "message": "Photo uploaded successfully",
}
```
## 4.Create Product

### Description
create new product

#### **Request Body**
```json
{
  "product_name": text,
  "product_photo": file,
  "rating" : number,
  "price" : number
}
````

#### **Response**
### **Description**

Success Response: HTTP 200 OK
```json
{
    "message": "created new product successfully",
}
```