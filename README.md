# Laragigs : A Gig Publishing Website

## Description

Laragigs is a laravel web application which focuses on creating a stable and secure system where users can publish and find their required job posts known as "gigs". For building this website tailwind css and blade components have been primarily used for frontend operations and laravel for backend operations. For database operations Eloquent ORM and MySQL have been used. 

**The project has not been completed yet, therefore a full list of features is not shown**

## Features

**1. Search & Filter**

Search for gigs can be done by typing the search keywords or the tag keywords

Here the search keyword is typed in and gigs that have the keyword in their name, description or tag, are shown.

![Laragigs Search Screenshot](Readme%20Attachments/search-1.png)

![Laragigs Search Result Screenshot](Readme%20Attachments/search-2.png)

Here the search keyword matches the tags in the gigs. All the gigs with that have this tag keyword is shown in the result.

![Laragigs Search Screenshot](Readme%20Attachments/search-3.png)

![Laragigs Search Result Screenshot](Readme%20Attachments/search-4.png)



**2. Validation**

All forms are validated through laravel built-in validate() method

![Create gig form Screenshot](Readme%20Attachments/validate-1.png)

![Create gig form error Screenshot](Readme%20Attachments/validate-2.png)


**3. Image Upload**

Image can be uploaded along with the gig posts

![Create gig form Screenshot](Readme%20Attachments/file-1.png)

![Create gig form error Screenshot](Readme%20Attachments/file-2.png) 

![Create gig form error Screenshot](Readme%20Attachments/file-3.png)


**4. Edit Gig**

All the gig information can be edited and saved. 

![Create gig form Screenshot](Readme%20Attachments/edit-1.png)

![Create gig form error Screenshot](Readme%20Attachments/edit-2.png) 

![Create gig form error Screenshot](Readme%20Attachments/edit-3.png)

**5. Gig Deletion**

Just like editing and saving gigs can be deleted as well

![Create gig form Screenshot](Readme%20Attachments/edit-1.png)

**6. Controllers**

All the routing is handled by a controller class

![Create gig form Screenshot](Readme%20Attachments/controller.png)