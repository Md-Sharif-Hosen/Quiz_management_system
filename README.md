![visitors](https://visitor-badge.laobi.icu/badge?page_id=Md-Sharif-Hosen/Quiz_management_system.readme)
# QuiZ Management System

##  Table of contents
* [Introduction](#introduction)
* [Features](#features)
* [Technologies](#technologies)
* [Demo Screenshots](#demo-screenshots)
* [Setup](#setup)

##  Introduction
Welcome to the Quiz Management System documentation.The application should allow teachers to create and manage quizzes, track students' scores, and provide an interactive quiz-taking experience.Students should be able to attend quizzes and receive immediate feedback on their answers. Students will show all quiz topics then select a single topic then submit quiz questions. The quiz questions will show all on one page not single by single. The application should calculate and display their scores upon quiz completion.

##  Features

This website has two Roles:

 - Students
 - Teacher

 ### Students:
 - Students will show all quiz topics then select a single topic then submit quiz questions.
 - Students should be able to attend quizzes
 - Receive immediate feedback on their answers.
 
 ### Teacher:
 - can manage all students.
	 - observe applicant information,and delete
	 - see the results of the students quiz

 - quiz management
	 - manage Class topics
		 - create
		 - edit
		 - update
		 - delete
    - manage quiz topics
		 - create
		 - edit
		 - update
		 - delete
	 - manage quiz questions
		 - create
		 - edit
		 - update
		 - delete
	 
## Technologies
* PHP Laravel
* mySQL
* HTML
* Java Script
* Bootstrap

## Demo Screenshots
<div>
	<h3>Entity Relationship Diagram </h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/ER Diagram.jpg?raw=true">
</div>
<div>
	<h3> Login </h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/login-page.jpg?raw=true">
</div>
<div>
	<h3> Registration </h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/register-page.jpg?raw=true">
</div>

<div>
	<h3>Students Home Page</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/student-home=page.jpg?raw=true">
</div>

<div>
	<h3>Student Profile</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/student profile-page.jpg?raw=true">
</div>

<div>
	<h3>Quiz List</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/student-quizlist-page.jpg?raw=true">
</div>

<div>
	<h3>Quiz Test</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/student-Quizexam-page.jpg?raw=true">
</div>
<div>
	<h3>Quiz Result</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/student-Quizresult-page.jpg?raw=true">
</div>

<div>
	<h3>Teacher dashboard</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/teacher-dashboard-page.jpg?raw=true">
</div>
<div>
	<h3>Teacher Profile</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/teacher-profile.png?raw=true">
</div>


<div>
	<h3>Class Create,view,edit,delete</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/teacher-class-page.jpg?raw=true">
</div>
<div>
	<h3>Quiz Create,View,Edit,delete</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/teacher-quiz-page.jpg?raw=true">
</div>

<div>
	<h3>Question create,view,edit,delete</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/teacher-question-page.jpg?raw=true">
</div>

<div>
	<h3>Candidate list</h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/Candidate list.png?raw=true">
</div>

## Setup

####  Installation
**requirements**

 1. PHP: 7.3 | ^8.0
 2. Laravel : ^8.75

First clone this repository, install the dependencies, and setup your .env file.

**run the commands**

clone project
```
git clone https://github.com/Md-Sharif-Hosen/Quiz_management_system.git
```

or [Click here to download .zip](https://github.com/Md-Sharif-Hosen/Quiz_management_system/archive/refs/heads/main.zip)


install dependencies
```
composer install
```

swith directory to project
```
cd Quiz_management_system
```

generate app key
```
php artisan key:generate
```

copy .env.example and paste as .env
```
cp .env.example .env
or copy .env.example .env
```

open in vs code editor
```
code .
```

open .env file and change db name. 
**database setup**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quiz_management_system
DB_USERNAME=root
DB_PASSWORD=
```

migrate database, and seed
```
php artisan migrate:fresh 
php artisan migrate --seed  
```


Finally time to launch project, run
```
php artisan serve
```
the project will open at http://127.0.0.1:8000

or
```
php artisan serve --port=8001 | any supported port number
```

**database seed will generate**

 -  login information for one teacher and ten students.
 -  23 question tests on C Progrming,Math,Digital computer system And C++

####  login credentials

**teacher:** 
email: mdsharifkhan762@gmail.com 
pass: 123456789

##### STUDENT login:

|     Email      |   password |                                           
|----------------|------------|
|tarek@gmail.com |`123456789` |
|sagir@gmail.com |`123456789` |
|rana@gmail.com |`123456789` |
|mukitrana@gmail.com |`123456789` |
|mumin@gmail.com |`123456789` |
|ethian@gmail.com |`123456789` |
|eyamin@gmail.com |`123456789` |
|mahbub@gmail.com |`123456789` | 
|sajid@gmail.com|`123456789` |
|masum@gmail.com |`123456789` |

## License
    This project is licensed under the MIT License.
