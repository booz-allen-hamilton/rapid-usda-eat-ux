# Executive Summary
### Booz | Allen | Hamilton
#### Project LunchBox - Submission to USDA EAT UX Challenge
------------------------------------------------------

## Overview of “LunchBox”

Thirty million children participate in the National free and reduced-price school lunch program every day. However, the application process is paper based and cumbersome making it challenging for applicants to receive the benefits they need. Enter “LunchBox” – a model web form application that was inspired and informed by user research and constructed to address their key pain points.  “LunchBox” uses plain language to make the requirements clear, uses prompts to reduce user omissions and errors, features help text to answer applicants’ questions as they go, and provides accurate and complete applications to school administrators.

In addition to addressing key issues with the user experience, “LunchBox” was constructed in a way that makes it easy for states to quickly and easily modify the form for their specific use – whether that be something as simple as changing the color scheme, to something more complex, like adding in additional fields and/or validation rules.   Ultimately, the “LunchBox” web-form could create a means for FNS to increase usage and compliance, improve program integrity, and expand insight so that FNS is set up to make the next round of program innovations.  
FNS is focused on delivering nutritional assistance programs to the people who need them, easily and efficiently.  That is what the “LunchBox” form design and architecture does for free and reduced price meals.


___Project Links:___
- Live Demo at http://lunchbox.digitalinteractivedevelopers.com
- [Watch our Submission Video](https://vimeo.com/157173503)
- [Watch more on our Rapid Solutions Sprint](bit.ly/bah-rapid-solutions)
- See Our Iterations from ["A"](https://invis.io/NW68ENL57) and ["B"](https://invis.io/R768ENQSC) to [Wireframes](https://invis.io/U868ENTMK) to [HiFi Mockups](https://invis.io/CD68ENVYB) 


###### [ [BACK HOME](../README.md) ]

------------------------------------------------------


## Our Inspiration

We were inspired by the stories of the schools and parents that interface with the application process – and shocked at the paper pushing challenges existing in the internet era. Designing for (and with) the user enabled us to bring our theoretical prototype into a working product that put usability – ease of learning, decrease in errors, and increase in reporting – first.
Additionally, we were inspired to change the pace at which government can bring services and products to their citizens. The hackathon approach aligned well with our passion for rapid prototyping of client ideas, which can bring things to life in a matter of weeks or months (not years).

Using the journey map as a background, we rapidly prototyped a solution using our Rapid Solution Sprint approach, which is a very creative and iterative cycle in which we focus on empathy and understanding of end users and quickly build, test, learn, and validate our solution.  Each iteration building on the last and changing based on the ideas and feedback we obtain through user testing.  For more details on our six phased approach, including how we developed the journey maps and how we iterated and tested our evolving solution, click below.

[Read More on Our Story Here](https://github.com/booz-allen-hamilton/rapid-usda-eat-ux/blob/master/documentation/our-story.md)




## Key Features of Our Solution

The USDA is constantly working to develop, implement, and institutionalize digital services and systems that are information- and customer-centric.  At FNS, this takes the form of transforming the digital experience surrounding the delivery of nutritional assistance programs.  The goal is to make them available to the people that need them, easily and efficiently.  With these goals in mind, “LunchBox” included the following distinguishing features that address our users' pain points, pulled directly from our interviews and empathy research:

* __Plain Language:__ Our form uses simple, conversational language that removes a lot of jargon that might have confused users. Plus, we wanted people to be able to translate this text into other languages, and the plain language ensures that nothing is lost in translation. 
* __Help Text:__ Our form also includes help text throughout the application that explains terms and requirements. This encourages applicants to provide accurate information, and also comforts those who don't have (or don't feel comfortable) sharing information like their social security number or race. 
* __Share Button:__ After talking to school administrators and potential applicants, we learned early on that just finding the application can be the hardest part. So we added a share button that makes it easy for school administrators, family, or friends to send the form to others who may benefit.  
* __User Behavior-Tracking Analytics:__ Our application can easily connect with an analytics platform. This gives the system owner the ability to track user behaviors within the form and constantly adapt the experience, based on those behaviors. 
* __Customizable Style & Themes:__ A more subtle feature is how we used Bootstrap to style our form. Since we know most low income families have mobile devices, but maybe not desktops, bootstrap ensures our web form will be responsive on all platforms, whether that be tablets, phones, or PCs.  It also enables them to quickly change the look and feel through themes and easy to update code.   
* __Easy to Maintain / Add New Features:__ Another back-end feature is that we used MVC or model view controller as the framework for our form. It may seem complicated, but it just means that the application is easy to maintain. It enables the system owner to easily update the look, connect to third-party applications, and customize data storage. 




## What’s Under the Hood

We leveraged open source technologies to power the solution and used widely adopted platforms such as LAMP stack (Linux Apache MySql PHP) so that it can be easily integrated into existing school IT services. The modular API architecture and backend validations ensure that the application can easily be customized, extended, and maintained across both desktop and mobile devices. The reference cloud hosting architecture utilizing Amazon Web Services also allows the solution to scale and increase performance while limiting unnecessary hosting costs. This also provides a continuous development and integrations DevOps process so that updates and new features can rapidly be deployed.

[Read More on our Technical Guide Here](https://github.com/booz-allen-hamilton/rapid-usda-eat-ux/blob/master/documentation/technical-guide.md)




## Challenges We Ran Into

As mentioned above, our team kicked-off this challenge by developing an understanding and appreciation of the users and their perspective on how the application experience could be improved.  When it came time to reconcile our design and usability aspirations with the requirements of the Hackathon, we quickly realized that what seemed to be fairly simple parameters were, in reality, quite complex.  The challenge wasn’t so much the technical feasibility of implementing the requirements, but how to implement the requirements in a way that still resulted in a favorable user experience.  We responded to this challenge by using a rapid prototyping approach where we would build, test, and learn in quick cycles (usually turning around ideas in days).  This was challenging for a number of reasons – but probably the biggest challenge we all faced was completely revisiting ideas that sounded good in discussions, but resulted in a poor experience when put into the application.  This resulted in countless iterations of the Home Page, the application flow, and the way the form looked and felt.  Ultimately, however, we were able to tackle all the feedback and create a solution that met both technical and user experience requirements.  




## What We're Proud Of

Our team consisted of diverse set of volunteers in Booz Allen with a passion for FNS, user experience design, and rapid solutions development.  Consequently, this challenge was extremely personal and something we fully committed to.  This meant spending a significant amount of upfront time getting to know and understand the current issues / challenges of the application process and the needs of users and program administrators.

Getting this foundational understanding directly from school administrators, potential users, and our own research allowed us to create a solution that we were extremely proud of.   Yes, it met the field requirements, process flows, and back end architecture requirements.   More than that, though, it made the application process smoother, easier to understand, and quicker to complete.  And because we used technologies like bootstrap and MVC, our solution is something all States could quickly leverage and implement.  Supporting an effort that could potentially impact millions of families across the nation gave us all a sense of pride – something none of us are shy about communicating to our fellow colleagues!  We walked away from this challenge with a deeper understanding and appreciation for the families in need, and an even stronger commitment to helping FNS address some of its key digital and program transformation efforts moving forward.



![Learn Ideate Make Check](images/ExecSummary-Iteration.png)


## What We Learned

As a long term partner of FNS, we’ve learned a lot about the NSLP and other nutritional assistance programs they administer.  That said, we learned that some of our assumptions and understandings about the current application process for free and reduced price meals were even more pronounced than we originally thought.   For example, in our interviews with school administrators, we learned that not only was the burden of paper applications significant, but they were much more likely to be inaccurate and were extremely difficult to collect / process.  Administrators unanimously preferred online applications to paper versions, siting the ease of collection and completeness of forms as their primary benefit.  Below is a selection of quotes from school administrators we spoke to:

* _"Online runs smoother because [the application] does not allow parents to proceed without filling out all application [fields]."_ - Cathy (Austin School District)

* _“Online is definitely better... The paper ones, we scan them also. [However,] they do the wrong ink color or they leave out information. They don’t sign it or leave off a kid.”_ – Theresa (Tustin Unified School District)

We also learned that efforts to transform paper-based processes into online forms or applications was often times prohibitively expensive, which has the unintended consequence of different states tackling the same problem in different ways, including (in some cases) districts within the same state creating different solutions.  We addressed this issue by creating a consistent, yet flexible and customizable platform for our solution. In terms of the application itself, we initially assumed that misreporting information attributed to lack of understanding could be rectified by ensuring the application was translated into languages other than English; however, the true issue was not multilingual availability, but complex wording across all languages, including English. Even as a group of native English speakers, we were confused by some of the terminology. This is one reason we prioritized plain language usage in our solution.





## What's Next

We look forward to the opportunity to meet with USDA stakeholders to explore strategies to fully implement this solution. With our partnership and deep embedded experience, we believe we are uniquely positioned to help execute this at a national level – including, refining the user experience, pilot testing the solution, and accelerating adoption across the country. This was a great opportunity to also demonstrate our ability to quickly build a digital solution that drives increased engagement, higher satisfaction with end recipients, and significant savings in both time and infrastructure costs.

We also know that there are other digital service solutions this approach can tackle and we look forward to working with the USDA to identify those next challenges that have the opportunity to make gigantic impact.

As a team, we will be focused on spreading the word by highlighting this challenge as an example of how government can engage with the public to capture a broader spectrum of solutions and build the next generation of digital services by the people, for the people.


###### [ [TOP](#) | [BACK HOME](../README.md) ]


