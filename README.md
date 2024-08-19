## Introducing
SBiZ Framework is a web application framework with Faster, Flexible, Secure, Eazy  (F2SE).

We’ve build this framework very eazy for using, so you time will focus to build you apps, "NOT wasting time for learning how to using framework".

SBiz Framwork have concept (F2SE):

Fast, This framework very light, bacause it not using unnecessary libraries
Flexible, This framework does not have strict rule, it give you big space to custome and creativiy with your style coding ,
you can make  varian or new framework from thisSecure, 

This framework is secure, you can using feature security (sanitation input for hanlde SQL Injection, XSS, Using Token for handle CSRF Attact, Brute Force Attack, Climbing Directory)

Eazy, we guaranted yout just need 15 minute to be master using this framework, all function and syntact in this framwork is native php, we no modification syntact php for same purposes, 
so  you dont need wasting time for read documentation or learning someting new for purpose same (learning curve very low)

##  SBiZ Framwork have feature

1. Flexibel Routing

2. Smart URL

3. Token Protection (Security from CSRF, Brute Force Attack)

4. Modular (View and Model) in representative with same directory

5. Santition Variable (Antisipation for SQL Injection, XSS Attact, Click Jacking, Dos MySQL)

6. Handle File Inclusstion and Directory Transversal

7. Handle Directory List

## Structur Directory
<pre><code>
├── config
    └── config.go
├── entity
|   └── *.go
├── migrate
|   └── db.go
    └── seed.go
├── test
|    └── *_test.go
├── main.go
└── README.md
</code></pre>

- Config/config.go  : Place for all global varible configuration 
- Controller/*.go   : Place for all logic process
- Entity/*.entiy    : Place for all model like strukur data
- Migrate/db.go     : Place for auto migration create database and table by reference model  in entity directory
- Migrate/seed.go   : Place for auto populate date di database
- Test              : Place for unit test each controller 


## Documentation 
URL : https://dendieisme.blogspot.com/2019/11/sbiz-php-mvc-framework.html

## Contact

If you have question, you can contact this email   
Email: dendie.sanjaya@gmail.com

## License

This project is licensed under the MIT License.
