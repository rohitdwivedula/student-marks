This website allows teachers/instructors to display the marks that students have scored in tests, evaluations and exams. Students login with email and a secret key that is given to them at the beginning of the semester.

# Views

* Index Page, which is also the login page
* Marks page, where users can see their marks. Users can verify marks that are correct.

# Setup

* Set the ```DOCUMENT_ROOT``` of the Apache server to the ```public_html/``` directory, and make sure PHP is enabled. 
* Setup the MySQL database required by running the commands in ```private/db/db_setup.sql``` in the MySQL terminal. Also, edit the file ```private/db/config_demo.ini``` - add the host, username, server password, and database name. (leave database name set to default). Once you're done editing rename the file to ```config.ini```.

# Features to Add

1. **Marks upload**: Instructor upload marks via HTML form (for individual students) and/or CSV upload(for multiple people at once. 
2. **Exam Statistics**: Students see the statistics of the particular exam (average, mean, median and distribution of specefic tests) as well as the aggregate of all tests.
3. **Login with Google.**
4. **Email notifications and verification**: Integrate GMail API to send email to verify email during sign up and to also send email notifications.
5. **Raise a concern**: Student should be able to raise a complaint over a particular score they feel is wrong. Instructor then checks and verifies. 
6. **Add: User Profile Page**
7. Add support for multiple courses, and multiple admins.