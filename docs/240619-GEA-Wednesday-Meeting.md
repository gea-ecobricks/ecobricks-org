
# Meeting started at 1pm UK time
Appologies from Mike

## Discussion centered around

https://github.com/gea-ecobricks/EarthenAuth/blob/main/user_tb.sql 

## And changes to
https://ecobricks.org/en/welcome.php
Current page -> https://ecobricks.org/en/movement.php

Next for Joe's Dev -> Earth Methods page next for dev  

https://dev.to/mochafreddo/how-to-manage-documentation-in-a-github-repository-a-guide-for-junior-developers-pgo

Very short meeting but had some interesting points 

Previous doc discussed, should this be seperated out ?
#  **GEA Development Road Map**


## Intentions

- Exit from 	dependence on Knack to running on our own code, servers and 	databases
- Build up our 	own revamped version of GoBrik phase by phase learning from our 	lessons
  - Our own 		independent user management and login system
  - Ecobricks.org 		intimately connected our apps (no api service!)
  - GoBrik 		operating on its own database to enable ecobrick logging, 		validation, authentication and brikchain generation.


## Goals

1. Use all our own 	code, servers and databases for all our apps
   1. For Earthen 		user account system
   2. For 		ecobricks.org
   3. For gobrik.com
   4. For 		biodiversity tracking app
   5. For 		ecobricks.org course moodle
   6. Other apps?
2. System for 	backing up indefinitely the brikchain database
3. Our own media 	(i.e. newsletter) server and system that all our apps, social media 	and real life marketing and events feed to

  
# Road Map

See our graphical [road map on Github](https://github.com/users/gea-ecobricks/projects/1).

1.  Establish our own equivalents of GoBrik's core functionality
   1. Login and Sign up
   2. Log an Ecobrick
   3. Log a project
   4. Log a workshop
2. Creation of new users database
3. Creation of ecobrick log form in PHP within standalone GoBrik 	template (but not on knack\_
   - Connect this form to knack database updating of ecobrick 		object
4. Recreate GoBrik signup and login sequence with our own user 	databases

- [ ] PHP development of Add Projects form
  - [ ] Log project form
  - [ ] Multi-language
  - [ ] Advanced options
  - [ ] Connect flow to Ecobricks.org landing page
  - [ ] Create project view page
  - [ ] Create project gallery page
- [ ] Duplication backup of mysql databases
- [ ] Addition of Workshops to main databases
  - [ ] Connect flow to Ecobricks.org landing page
  - [ ] Create workshop view page
  - [ ] Create workshop gallery page
  - [ ] Invite trainers to migrate old workshops to new
- [ ] Establish skeleton of PHP login system
  - [ ] Set up master Earthen Member Management Database system
    - [ ] Simple:  Use Wordpress user datbase table as an example
    - [ ] Allow for multiple username and configuration options
      - [ ] SMS
      - [ ] E-mail
      - [ ] Whatsapp
      - [ ] Paper (stamped mail) - maybe cost effective in Indonesia
- [ ] Connect Earthen system to allow GoBrik and Earthen signups.  
  - [ ] Nextcloud also?
  - [ ] Moodle?
- [ ] Reinvite all ecobrickers to revitalize their old accounts by re-entering a password
- [ ] Connect account system to govern over 
  - [ ] Log project form
  - [ ] Log Ecobrick form
  - [ ] Log workshop form
- [ ] Enable trainer review and authentication of latest logged ecobricks
- [ ] Enable trainer review of projects
- [ ] Create dashboard for admins to view member, ecobrick, project and workshop stats
- [ ] Reconnect data on logged ecobricks to the brikchain
