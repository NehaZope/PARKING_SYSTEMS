# PARKING_SYSTEMS
This is a easy parking system that automatically tracks and updates the vacant spaces in the parking lot of the college and provides this information to the user may it be a faculty or user through the dashboard.
The website is divided into three parts namely :
1. the registration and signup
2. the two_wheeler parking system
3. the four_wheeler parking system
Incase of registration, we create a database called register and table user. The table user takes parameters as:
`id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL, PRIMARY KEY (`id`)
 Incase of two wheeler and four wheeler parking systems we create two tables under the same database register, namely space_allocated2 and space_allocated4 which take the parameters as:
 'slot_id'varchar(50) PRIMARY KEY,
 'booking' varchar(10) with a default value of Free.
 The two tables already contain list of total parking lots with default status.
 When the user logins or registers to the website, the homepage offers the summary of the parking slots through dashboard for slots open,booked,open for faculty and handicap. 
 There are two tabs for two wheeler and four wheeler each. These tabs redirect the user to  parking page, where they can view the slots available for parking.
 Each parking slot has its id and status printed, the user can select the desired free spot and enter the slot id and set its status to 'booked; on the book slot form.
 This initiates the update query that redirects user to next page , where update parking slots are displayed and booking is confirmed.
 The page later redirects user back to home page where they can view the updated dashboard.
 The same mechanism is followed for four wheeler also.
 Screenshots for the same are added in a separate folder along with implementation code of the system.
 
