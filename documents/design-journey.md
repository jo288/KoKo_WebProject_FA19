# Project 4: Design Journey

Your Team Name: Golden Beaver

**All images must be visible in Markdown Preview. No credit will be provided for images in your repository that are not properly linked in Markdown. Assume all file paths are case sensitive!**


## Client Description

[Tell us about your client. Who is your client? What kind of website do they want? What are their key goals?]

[NOTE: If you are redesigning an existing website, give us the current URL and some screenshots of the current site. Tell us how you plan to update the site in a significant way that meets the final project requirements.]

### About the Client

Our client's name is Seungyoon Hwang. She has owned the Korean restaurant Koko, which is located in Collegtown, for about a year, taking over for the previous owner. The client has tasked us with creating a website for her restaurant, because she has experienced inconveniences with not having one. For example, many customers have trouble with ordering take out over the phone because they do not have access to a menu.

### Client Selection

Our group decided to choose this client because most of our members have eaten at the restaurant before. These members have noticed that the restaurant does not have a website, and personally visited the restaurant to confirm the needs and wants of the client, which are explained below.

### Client Goals

The client has received former proposals for a site for Koko Restaurant, but were not satisfied and felt like they did not appropriately represent the restaurant. Instead, the client wants a site that is easy to navigate and shows the unique food options that Koko has to offer. They want to emphasize the quality and photography of the food but also make the site interactive and accessible for the customer. The primary goal is to engage with customers and allow them to view a gallery of food options before coming to the place in order to more easily order their food. The second goal is to be able to communicate the restaurant's hisory and mission towards the consumers and possibly communicate with them directly.


## Meeting Notes

[By this point, you have met once with your client to discuss all their requirements. Include your notes from the meeting, an email they sent you, or whatever you used to keep track of what was discussed at the meeting. Include these artifacts here.]

- April 13th, 2019
  - Client wants a colorful website design with lots of pictures
  - Client wants large and readable fonts for the website.
  - Client wants the contact information to be clearly visible.
  - Task distribution:
    - Tricia: menu, about
    - Khalid: contact, general layout of all pages
    - Jinju: index, photo gallery
    - Kaitlyn: reviews
  - Rough draft of design-journey by April 15th (internal deadline)


## Purpose & Content

[Tell us the purpose of the website and what it is all about.]

The purpose of the website is to display information (menu, location, reviews) about the client's restaurant to potential customers. It is primarily informative about the client's services. The website will allow potential and current customers of the restaurant to become more familiar with the food options.

## Target Audience(s)

[Tell us about the potential audience for this website. How, when, and where would they interact with the website? Get as much detail as possible from the client to help you find representative users.]

The target audience is people living in or visiting Ithaca who want to eat out at a restaurant. The target audience will largely be made up of Asian Cornell students. The target audience would use the site to gather information about the restaurant. The site provides them information (menu, location, other people's reviews etc.) about the restaurant.

They would be able to search the menu and see pictures of the food which would help them decide if they wanted to go to the restaurant. The target audience can also see other people's review and write their own for others to see. In addition, the target audience can personally contact the client about any inquiries regarding the restaurant.

## Client Requirements & Target Audiences' Needs

[Collect your client's needs and wants for the website. Come up with several appropriate design ideas on how those needs may be met. In the **Rationale** field, justify your ideas and add any additional comments you have. There is no specific number of needs required for this, but you need enough to do the job.]

- Target Audience Need
  - **Requirement or Need** [What does your client and audience need or want?]
    - Target audience have different dietary restrictions
  - **Design Ideas and Choices** [How will you meet those needs or wants?]
    - Allow users to filter for specific dietary restrictions on menu page
  - **Rationale** [Justify your decisions; additional notes.]
    - Filtering for dietary restrictions improves accessibiliy and allows the client to cater to a wider variety of customers
- Client Requirement
  - **Requirement or Need** [What does your client and audience need or want?]
    - Client wants customers to have access to the menu with the various food options
  - **Design Ideas and Choices** [How will you meet those needs or wants?]
    - Create a page specifically for displaying the menu
  - **Rationale** [Justify your decisions; additional notes.]
    - A separate page for the menu makes the menu easy to find (e.g. can go to page via nav bar) and focuses attention on the various dishes when on the menu page
- Client Requirement
  - **Requirement or Need** [What does your client and audience need or want?]
    - Client wants customers to feel comfortable and welcomed to the website
  - **Design Ideas and Choices** [How will you meet those needs or wants?]
    - Use a simple but inviting design with bright colors
  - **Rationale** [Justify your decisions; additional notes.]
    - A simplistic design will make the website more accessible for users, and bright colors will feel more inviting
- Client Requirement
  - **Requirement or Need** [What does your client and audience need or want?]
    - Client wants lots of pictures of the food
  - **Design Ideas and Choices** [How will you meet those needs or wants?]
    - Create a page for a photo gallery of the food and include pictures throughout the website
  - **Rationale** [Justify your decisions; additional notes.]
    - A separate photo gallery will provide a group of food pictures for the users, and help the users get a sense of what the various menu items look like


## Initial Design

[Include exploratory idea sketches of your website.]

Header & Footer Templates (header.php, footer.php)
![Header/footer draft](headerfooter.jpg)

Home (index.php)
![Home page draft](index.jpg)

About (about.php)
![About page draft](about.jpeg)

Menu (menu.php)
![Menu page draft](menu.jpeg)

Gallery (gallery.php)
![Photo gallery page draft](gallery.jpg)

Reviews (reviews.php)
![Review page draft](reviews.jpg)

Dish (dish.php)
![Dish page draft](dish.jpg)

Contact (contact.php)
![Contact page draft](contact.jpg)

Inspirational Color Palette
![Color palette](colorpalette.png)

We may use these colors for designing the website to answer the client's request for a bright, colorful design. The fourth color was chosen to represent the restaurant building's color and the warm colors(red, orange, yellow) were added to represent the friendly atmosphere as well as the colors of the food served.

## Information Architecture, Content, and Navigation

[Lay out the plan for how you'll organize the site and which content will go where. Note any content (e.g., text, image) that you need to make/get from the client.]

[Document your process, we want to see how you came up with your content organization and website navigation.]

[Note: There is no specific amount to write here. You simply need enough content to do the job.]

- **Navigation**
  - Home (need to get logo from client)
  - About
  - Menu (need to get menu from client)
  - Gallery (need to get images from client)
  - Reviews
  - Dish
  - Contact

- **Content** (List all the content corresponding to main navigation and sub-categories.)
  - *Home*:
    - introduce the client's restaurant with images and short introductory sentences
    - Display few of the top menus and a link to see more menu
  - *About*:
    - explain more in depth about the restaurant
    - provide a brief history/information about Korean cuisine
  - *Menu*:
    - display menu items with descriptions
    - address dietary restrictions by allowing to filter for vegetarian, vegan, and gluten free foods
  - *Gallery*:
    - display the different albums of client's restaurant and the dishes it serves
    - Clicking on album will take user to new page of pictures of that album
    - Allow the users to select specific tags to display certain pictures
    - When the image is hovered over, display the title and description of the image as an overlay.
  - *Dish*:
    - shows the information (photo, dish name, ingredients, dietary restrictions, price, etc) about a single dish
    - clicking on menu item in menu page or photo in photo gallery page will take user to dish page
  - *Reviews*:
    - display customer reviews of clients resturant
    - Allow users to write own review of restaurant and sort through current reviews based on rating or date of review.
  - *Contact*:
    - A way to contact the resturant and submit reservations or orders
    - can ask questions

- **Process**
  - Card sort 1:
  ![Card sort 1](card_sort.jpeg)
  - Card sort 2:
  ![Card sort 2](cardsorting.jpg)
  - There were multiple ideas that we had for the different navigation items we wanted. We considered creating an animation with a dropdown menu but because the client wanted a more simple design to make the website more accessible for the target audience, we decided to create a more simple cardsort with all the navigation items in one line.

## Interactivity

[What interactive features will your site have? What PHP elements will you include?]

The site will use PHP templates for header and footer. Header template will include the website's title as well as the navigation bar which will reflect the current page the user is on. Footer template will display the copyright information for the page displayed and basic contact information of the client.

[Also, describe how the interactivity connects with the needs of the clients/target audience.]

The site will have the menu of the restaurant the user will be able to filter for dietary restrictions (vegetarian, vegan, gluten free). In addition, there will be a photo gallery where the user can view pictures of the food at the restaurant. In addition, the user will be able to filter the pictures based on specific tags.

The site also will have a contact form and a review form. The contact form will allow the user to directly interact with the client, and the review form will allow the other members of the target audience. The review page will also allow the client to get feedback about their restaurant.


## Work Distribution

[Describe how each of your responsibilities will be distributed among your group members.]

  - Task distribution
    - Tricia: menu, about
      - 4/17: draw sketches for about and menu pages
    - Khalid: contact
      - 4/17: draw sketches for contact page
    - Jinju: index, photo gallery
      - 4/17: write up index.php with templates first which can then be used as a template for other pages
      - 4/17: write up a css for the general styling of all the pages
    - Kaitlyn: reviews
      - 4/17: draw sketches for review page
    - All members:
      - 4/17: work on design-journey.md to complete Milestone 1

[Set internal deadlines. Determine your internal dependencies. Whose task needs to be completed first in order for another person's task to be relevant? Be specific in your task descriptions so that everyone knows what needs to be done and can track the progress effectively. Consider how much time will be needed to review and integrate each other's work. Most of all, make sure that tasks are balanced across the team.]

## Additional Comments

[If you feel like you haven't fully explained your design choices, or if you want to explain some other functions in your site (such as special design decisions that might not meet the final project requirements), you can use this space to justify your design choices or ask other questions about the project and process.]


--- <!-- ^^^ Milestone 1; vvv Milestone 2 -->

## Client Feedback

[Share the feedback notes you received from your client about your initial design.]

Client approved of our initial design. She liked the color scheme and layouts of our pages. However, the client expressed that she wanted the prices of the menu items to be on the website.

## Iterated Design

[Improve your design based on the feedback you received from your client.]


## Evaluate your Design

[Use the GenderMag method to evaluate your wireframes.]

[Pick a persona that you believe will help you address the gender bias within your design.]

We've selected **[Abby]** as our persona.

We've selected our persona because Patricia/Patrick and Tim represent the majority of the customers of Koko. We selected Abby because she represents the minority, allowing us to address gender-inclusiveness bugs in our design.

### Tasks

[You will need to evaluate at least 2 tasks (known as scenarios in the GenderMag literature). List your tasks here. These tasks are the same as the task you learned in INFO/CS 1300.]

[For each task, list the ideal set of actions that you would like your users to take when working towards the task.]

Task 1: John, a Cornell student, has never eaten Korean food before until last week. He ate at Koko and had a wonderful experience. John wants to leave a positive review.

  1. [action 1...]
  2. [action 2...]
  3. ...

Task 2: Thomas is a vegetarian, and loves to eat Asian food. He heard that Koko has some of the best Asian food near Cornell University. However, he is concerned about being able to find menu options that fit his dietary restriction. Thomas wants to find photos of vegetarian menu items.

  1. click on photo gallery page in nav bar
  2. scroll to find album for vegetarian food options
  3. click on vegetarian food album


### Cognitive Walkthrough

[Perform a cognitive walkthrough using the GenderMag method for all of your Tasks. Use the GenderMag template in the <documents/gendermag-template.md> file.]

#### Task 1 - Cognitive Walkthrough

[copy the GenderMag template here and conduct a cognitive walkthrough to evaluate your design (wireframes).]

[You may need to add additional subgoals and/or actions for each task.]


#### Task 2 - Cognitive Walkthrough


### Cognitive Walk-though Results

[Did you discover any issues with your design? What were they? How will you change your design to address the gender-inclusiveness bugs you discovered?]

[Your responses here should be **very** thorough and thoughtful.]


## Final Design

[Include sketches of your finalized design.]

[What changes did you make to your final design based on the results on your cognitive walkthrough?]


## Database Schema

[Describe the structure of your database. You may use words or a picture. A bulleted list is probably the simplest way to do this.]

Table: menu
* field 1: id
* field 2: menu name
* field 3: description
* field 4: price
* field 5: dietary restriction id
* field 6: category id

Table: categories
* field 1: id
* field 2: category

Table: dietary restriction
* field 1: id
* field 2: dietary restriction

Table: menu images
* field 1: id
* field 2: image name
* field 3: image extention
* field 4: menu id
* field 5: image source
* field 6: review id

Table: reviews
* field 1: id
* field 2: reviewer
* field 3: rating
* field 4: comment


## Database Queries

[Plan your database queries. You may use natural language, pseudocode, or SQL.]


## PHP File Structure

[List the PHP files you will have. You will probably want to do this with a bulleted list.]

* index.php - main page.
* includes/init.php - stuff that useful for every web page.
* TODO


## Pseudocode

[For each PHP file, plan out your pseudocode. You probably want a subheading for each file.]

### index.php

```
Pseudocode for index.php...

include init.php

TODO
```


## Additional Comments

[Add any additional comments you have here.]


--- <!-- ^^^ Milestone 2; vvv Milestone 3 -->

## Issues & Challenges

[Tell us about any issues or challenges you faced while trying to complete milestone 3. Bullet points preferred.]


--- <!-- ^^^ Milestone 3; vvv FINAL SUBMISSION-->

## Final Notes to the Clients

[Include any other information that your client needs to know about your final website design. For example, what client wants or needs were unable to be realized in your final product? Why were you unable to meet those wants/needs?]


## Final Notes to the Graders

[1. Give us three specific strengths of your site that sets it apart from the previous website of the client (if applicable) and/or from other websites. Think of this as your chance to argue for the things you did really well.]

[2. Tell us about things that don't work, what you wanted to implement, or what you would do if you keep working with the client in the future. Give justifications.]

[3. Tell us anything else you need us to know for when we're looking at the project.]
