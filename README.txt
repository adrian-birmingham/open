Project specification and notes.

All users should be able to view any approved attractions in the database.

View all approved

Authenticated users should be able review the attractions, and leave a rating between 1-5. 

Each user should only be allowed to create one review for an attraction, however they should be able to update their own review at a later date.

Users with administrator access should be able to add, edit and delete
attractions from the system. 

They should also have the option to review and hide any inappropriate reviews.

Finally, include a page which lists the top 5 attractions ordered by their
overall average rating, whilst also displaying the number of reviews the score is based on.

Any hidden reviews should not be included in the overall score.

Bonus points for:

Effective database design.

Including appropriate tests.

Using social authentication.

Following PSR standards.

Upload your finished project to an accessible Git repository.

Include seed data, migrations and / or a populated sqlite database in your project.

Time constraints prohibited my researching and implementing social authentication, something I have not worked with before.

I have included a mysql database dump: open_db_backup_09_11_18.sql

A basic test plan (time constraints prohibiting) :
test_plan.xml

Other enhancements:

Additional views of Reviews per Attraction, at which stage I would have added indexes to the tables.
