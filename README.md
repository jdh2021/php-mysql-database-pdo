### PHP - mySQL Database accessed with PDO

I installed XAMPP and created a mySQL database. Following [this](https://www.youtube.com/watch?v=Fg0CP-ri87U) tutorial from Dani Krossing, I connected to the database with PDO and used prepared statements to query and update the database with new records. 

I created Users, Users View, and Users Controller classes to apply the MVC model. The Users class acts as the model that strictly interacts with the database. The Users View class acts as the view fetching information by extending the User class and referencing the protected getUser method within it. The Users Controller class acts as the controller inserting and updating information by extending the User class and referencing the setUser method within it. 
