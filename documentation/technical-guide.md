# Technical Approach
We used all open source technologies and open sourced library for our LunchBox prototype. It was built using a technical stack and architecture that is easily installed and deployed across different environment. It uses popular technical frameworks and open source technology to ensure that organizations are able to integrate the solution with their existing products. The application follows a standard model-view-controller (MVC) architecture and cloud infrastructure.

![HOLD](https://placeimg.com/1000/500/tech/grayscale)


## MVC Architecture Pattern
The application was designed using the standard model-view-controller architecture. The following collection lists the libraries and technology within each of those areas and their purpose within our application.

Codeigniter (PHP Framework): 
-	Purpose: PHP web application framework
-	License: https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst

Twitter Bootstrap: 
-	Purpose: Responsive CSS Framework and front-end library
-	License: http://getbootstrap.com/getting-started/#license-faqs

JQuery: 
-	Purpose: JavaScript library for 
-	License: https://jquery.org/license/

MySql: 
-	Purpose: Database
-	License: http://www.mysql.com/about/legal/


## Cloud Architecture
The application is hosted on the Amazon Web Services, and the architecture has been designed specifically to support the scalability and reliability that the cloud provides. Below are the following Amazon resources and services that our team used to both build a stable application as well as increase the pace of development.

![HOLD](https://placeimg.com/1000/500/tech/grayscale)


Amazon EC2: web service that provides resizable compute capacity
-	Purpose: EC2 hosts our application, and depending on the load of the users to the site, they can scale up automatically to account for the additional traffic and workload

Amazon Elastic Load Balancer: load balancer that redirects traffic to EC2 instance for a consistent application performance
-	Purpose: ELB distributes the traffic of our application and monitors the health of other application instance

Amazon RDS: relational and scalable database
-	Purpose: A separated database hosted in the cloud is able to scale automatically based on the amount of in data in our application and replicated to ensure backups.

Amazon CodePipeline: continuous delivery service for fast and reliable application updates
-	Purpose: CodePipeline enables our team to automatically test and deploy updates according to our code repository. This has enabled much faster and reliable deployment to the environment and has saved the team developer time. 

