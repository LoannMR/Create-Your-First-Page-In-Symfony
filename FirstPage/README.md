# ---------------------
# Syntax in controller :
```php
class LuckyController
{
    /**
     * @Route("/lucky/number")
     */

    //When the class is loaded, it executes this function
    public function number(): Response
    {
        
        return new Response(
            '<html><body>Something</body></html>'
        );
    }
}
```
# ---------------------
# DEBUG
php bin/console = list of commands that can give debbugging information
php bin/console debug:router = list of all routes in your system

symfony check:security = it gives vulnerabilities of your project

# BOTTOM BAR (on website)
= web debug toolbar

--> if we don't put a body, the web toolbar disapear

# --------------------

config/ 
    Contains… configuration!. You will configure routes, services and packages. 
    
src/ 
    All your PHP code lives here. 
    
templates/ 
    All your Twig templates live here. 

Most of the time, you’ll be working in src/, templates/ or config/. As you keep reading, you’ll learn what can be done inside each of these. 

So what about the other directories in the project? 

bin/ 
    The famous bin/console file lives here (and other, less important executable files). 
var/ 
    This is where automatically-created files are stored, like cache files (var/cache/) and logs (var/log/). 
vendor/ 
    Third-party (i.e. “vendor”) libraries live here! These are downloaded via the Composer package manager. 
public/ 
    This is the document root for your project: you put any publicly accessible files here. 

And when you install new packages, new directories will be created automatically when needed.
