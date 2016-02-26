# Technical Guide

## Approach
We used all open source technologies and open sourced library for our LunchBox prototype. It was built using a technical stack and architecture that is easily installed and deployed across different environment. It uses popular technical frameworks and open source technology to ensure that organizations are able to integrate the solution with their existing products. The application follows the widely addopted model-view-controller (MVC) architecture and cloud infrastructure.

![Tech Architecture](images/Tech-Arch.png)



## Dependencies
___Describe any dependencies that must be installed for this software to work. This includes programming languages, databases or other storage mechanisms, build tools, frameworks, and so forth. If specific versions of other software are required, or known not to work, call that out.___

The application was designed on a LAMP (Linux Apache MySql PHP) stack using the standard model-view-controller architecture. The following collection lists the libraries and technology within each of those areas and their purpose within our application.

- **Codeigniter:** _PHP web application framework_ - [License](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst)

- **Twitter Bootstrap:** _Responsive CSS Framework and front-end library_ - [License](http://getbootstrap.com/getting-started/#license-faqs)

- **JQuery:** - _JavaScript library for event handling_ - [License](https://jquery.org/license/)

- **MySql:** _Database_ - [License](http://www.mysql.com/about/legal/)

#### Optional Supporting Services
- **Google Analytics:** _User Behavior and Usage Tracking_ - [Link](https://www.google.com/analytics/)
- **Elevio:** _Live User Support & Interactive On-Screen Help Guide_ - [Link](https://elev.io/)
- **UserVoice:** _Product Management & Customer Support Ticketing_ - [Link](https://www.uservoice.com/)



## Scalable Cloud Architecture w/ DevOps
The application is hosted on the Amazon Web Services, and the architecture has been designed specifically to support the scalability and reliability that the cloud provides. Below are the following Amazon resources and services that our team used to both build a stable application as well as increase the pace of development.

- __Amazon EC2: web service that provides resizable compute capacity__
  -	Purpose: EC2 hosts our application, and depending on the load of the users to the site, they can scale up automatically to account for the additional traffic and workload

- __Amazon Elastic Load Balancer: load balancer that redirects traffic to EC2 instance for a consistent application performance__
  -	Purpose: ELB distributes the traffic of our application and monitors the health of other application instance

- __Amazon RDS: relational and scalable database__
  -	Purpose: A separated database hosted in the cloud is able to scale automatically based on the amount of in data in our application and replicated to ensure backups.

- __Amazon CodePipeline: continuous delivery service for fast and reliable application updates__
  -	Purpose: CodePipeline enables our team to automatically test and deploy updates according to our code repository. This has enabled much faster and reliable deployment to the environment and has saved the team developer time. 

![Tech Cloud](images/Tech-Cloud.png) 




## Installation (Local)
___Detailed instructions on how to install, configure, and get the project running. This should be frequently tested to ensure reliability. Alternatively, link to a separate INSTALL document.____

1. [Install Composer](https://getcomposer.org/doc/00-intro.md)
2. Install MAMP (Lamp for Windows) or any Apache Server
3. Run `php composer.phar install`
4. Configure database and server variables
5. Start Apache Server



## Configuration
___If the software is configurable, describe it in detail, either here or in other documentation to which you link.___



## AWS Cloud Deployment
___If the software is configurable, describe it in detail, either here or in other documentation to which you link.___


