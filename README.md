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
	<h3> Login </h3>
	<img width="700" src="https://github.com/Md-Sharif-Hosen/Quiz_management_system/blob/main/Demo/login.jpg?raw=true">
</div>

<div>
	<h3> Registration </h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/registration.jpg?raw=true">
</div>

<div>
	<h3> User dashboard</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/user dashboard.jpg?raw=true">
</div>

<div>
	<h3> Update information</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/update-info.jpg?raw=true">
</div>

<div>
	<h3>Quiz test</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/quiz-test.jpg?raw=true">
</div>

<div>
	<h3>Quiz result</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/quiz-result.jpg?raw=true">
</div>

<div>
	<h3>Admin dashboard</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/admin-dashboard.jpg?raw=true">
</div>

<div>
	<h3>Candidate list</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/candidate-list.jpg?raw=true">
</div>

<div>
	<h3>Quiz topics</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/quiz-topics.jpg?raw=true">
</div>
<div>
	<h3>Quiz preview</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/quiz-preview.jpg?raw=true">
</div>

<div>
	<h3>Select question for quiz</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/select-question-for-quiz.jpg?raw=true">
</div>

<div>
	<h3>Submit selected question</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/check-selected-question-submit.jpg?raw=true">
</div>

<div>
	<h3>Question Bank</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/question-list.jpg?raw=true">
</div>

<div>
	<h3>Question create</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/question-create.jpg?raw=true">
</div>

<div>
	<h3>Error validation</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/create-validation.jpg?raw=true">
</div>

<div>
	<h3>Question edit</h3>
	<img width="700" src="https://github.com/Md-shefat-masum/hiring-portal/blob/main/demo/edit-question.jpg?raw=true">
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
git clone https://github.com/Md-shefat-masum/hiring-portal.git
```

or [Click here to download .zip](https://github.com/Md-shefat-masum/hiring-portal/archive/refs/heads/main.zip)


install dependencies
```
composer install
```

swith directory to project
```
cd hiring-portal
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
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

migrate database, and seed
```
php artisan migrate:fresh --seed 
```

after migration reseed, previous data will be remove
```	
php artisan db:seed UserSeeder
php artisan db:seed QuizSeeder
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

 -  login information for one administrator and ten users.
 -  30 question tests on HTML, CSS, and Github

####  login credentials

**admin:** 
email: admin@gmail.com 
pass: @12345678

##### Candidates login:

|     Email      |   password |                                           
|----------------|------------|
|user1@gmail.com |`@12345678` |
|user2@gmail.com |`@12345678` |
|user3@gmail.com |`@12345678` |
|user4@gmail.com |`@12345678` |
|user5@gmail.com |`@12345678` |
|user6@gmail.com |`@12345678` |
|user7@gmail.com |`@12345678` |
|user8@gmail.com |`@12345678` | 
|user9@gmail.com |`@12345678` |
|user10@gmail.com |`@12345678` |
|user11@gmail.com |`@12345678` |
