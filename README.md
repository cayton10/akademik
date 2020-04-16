# akademik

Akademik is the second php homework project for CIT 313: Web Programming II. This project emphasizes the use of arrays, PHP session variables, and functions. You can check out the final product <a href='http://cit.marshall.edu/cit313/cayton10/PHP/HW2/akademik/index.php' target='_blank'>here</a>. The application is stored on a student project server, so this may go down at any time. If it does, let me know and I'll post it somewhere else.  

## Project Description

"For your second PHP project, you will be creating a list that simulates the courses you must take in order to graduate (you can test with a small subset of courses). You will need to create a single page application that will allow a user to add courses to this list (HINT: store as a PHP Session variable) and then add the ability to mark courses as completed. When a course is marked as completed, you need to store the grade received in the course and change the course listing's CSS for this course (think CSS class) to italics and gray text. You should store your list of courses as an array (and remember, arrays can be added to session variables). Nothing says you are limited to a single array either (grades), but extra credit given for a single array. The list of courses will also display the student's GPA for those courses completed (assume the same # of credit hours for each course). For the GPA, store it as a cookie that gets calculated only when the course is marked as completed and a grade entered (think form submission to change up your sessions and cookies). Use and modify a Bootstrap template. 

## What I learned

This project was centered around familiarizing myself with session control, how sessions function, and using cookies. It was a good exercise for tracking users and updating cookie values based on user provided information. I also learned about setting cookies with appropriate parameters. 

### Cookie Domain Parameter

Since the application is a single page, and we need to store and subsequently access a user's GPA in a cookie, I created a function to calculate GPA and set the value to a cookie named 'gpa'. When I had trouble, it was because the function was written with the following parameters: 

```php
setcookie('gpa', '$GPA', time() + 60 * 60 * 3);
```
When investigating what's happening during setting the cookie through the function call, I noticed in dev tools that the cookie was created, and immediately disappeared. This was due to the fact that after returning from the function, my php script redirects back to index.php by way of the 

```php
header()
``` 
function. Since we're setting the cookie within the scripts directory, what I needed was the parameter to set the cookie for all directories within the site. 
```php
setcookie('gpa', '$GPA', time() + 60 * 60 * 3, '/');
```
Sure enough, this fixed the issue and the application functions appropriately. 

### User Defined Functions

I built a couple of functions for this application and I'll say the one thing I need to improve is using non-specific variable names within the function definitions. It's something I've found hard to wrap my head around since C++, but I feel like I'm getting better with it. 