# StarIndustries
 Sem 5 - DBMS miniproject.

# The complete problem statement
In a Star India pvt. Ltd.chain of buying or selling brand new car or second hand car a database is to be designed to store following requirements.The company has many branches at different locations.Each branch has a branch manager.Each branch has different types of sections like brand new cars,second hand cars,agents,etc.Database should store sectional details,which includes department name,product list with rates ,product description,product number,type and number of product available etc.System will generate bill.
1.	Find brand new cars at different branches.
2.	Find product description given product name.

## Specific Problem statement addressed with this project
GUI should allow recording car details, adding new car information,modifying current details etc.Only managers are allowed to do these operations.Any other staff member who has login id can only generate a bill. Manager is allowed to generate various reports based on dta ,branch,car types, customers etc.


*So, we have made a set of webpages that would help the management staff of Star India Industries across all different branches to perform basic tasks like viewing and manipulating car details, adding new cars, deleting cars etc. A new user can register and then log in using the login window we have provided. After login, the user is taken to the home page. Here, in the “cars” section one can view all the new cars. These cars can be filtered according to branch. Complete details and bill generation of a particular product (car) can be found on the product page when “More Details” is clicked. Buttons for adding a new car, modifying car information or deleting a car are only visible to users who are managers.*


# Design

The languages that we used to make our project were HTML5, CSS3, JavaScript, PHP, MySql. 
1. **HTML:** - to structure our pages, make forms and to navigate between pages. 
2. **CSS:** - to style our pages and to make forms and the displayed information attractive to users and admin. 
3. **JavaScript:** - mainly for function call for AJAX. 
4. **AJAX:** - for dropdowns in input fields. We used AJAX for the delete button that would delete records. 
5. **PHP:** - for the back end of our project. Tasks like connecting to the server and database, running SQL queries, maintaining sessions, taking values from different forms using either GET or POST method and navigation to different pages were achieved using PHP. 
6. **MySQL:** - to perform all the interactions with the database. 

# ER Diagram
![DBMS miniproject (2)](https://user-images.githubusercontent.com/51905437/115951075-6baac680-a4fc-11eb-93eb-354f6a14e631.png)


Our project provides users with a simple interface to perform the tasks they want and manage the company products. Users can easily get information about a particular manager just by typing in the location of the branch. Since we have used AJAX for the location input box, the user need not type the whole location of the branch. Once the user starts typing, the page will display all the information with the location that has a pattern matching to the value entered by the user. The user can also get information about all the cars in a particular branch. Again, since we have used AJAX for this input too, a user need not enter the whole location. For admin, we successfully created 3 options - update, delete and insert for the cars info table. For inserting the admin just has to fill a form that has an input field for the table. To delete admin can search records either by entering a location or particular car id. Since we have used AJAX, admin need not enter a complete location. When an admin selects the update option, the page displays all the records present. The admin can click a record that he/she wants to update and the page will navigate to an update form, which would assist the admin in updating the values.

**Thankyou for your attention. Feel free to contribute or suggest changes.**
