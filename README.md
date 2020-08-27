### FORM USING PHP

Introduction to the project ...

##### Planning working method

**Issues to consider :**

![Issues to consider for mockup](https://www.cleveroad.com/images/article-previews/mockup-of-website-elements.png)

**Frontend :** Form (html & css), ...


**Backend :** Form (php), ...


**Mock-up :**


##### 1. Form

**Style & Graphic Chart:**

* [font](https://www.fontsquirrel.com/fonts/bellota)
* Colors: #0d8187, #FFF, #303030
* Structure content with grid

**Used framework :** bootstrap, bulma, materialize, ... ???

**Html Form :**

/!\ Semantical validity

| name and lastname         | type = text
| gender                    | type = radio
| email address             | type = email
| country                   | type = text or select -> option (value)
| subject (3 choices)       | *default = Other*
| message => textarea       | type = textarea

* All fields must be completed except subject *(default value = Other)*
* Add labels
* Add Submit input type

**PHP :**

Display rough data received with print_r


##### 2. Accessibility

HTML must be accessible for blind people.

##### 3. Error output

In case of wrong input, the form displays a visual clue into or near the correct input field.

Message must be readable and helpful to users, including blind people.

##### 4. Sanitize and validate

On server side,

* Sanitize input
* Validate content (obligatory field, valid email input, ...)

##### 5. Return email

If inputs are valid, the script respond by email to the given address with a feedback.

##### 6. Honeypot

Add a [anti spam technique](https://www.thryv.com/blog/honeypot-technique/).

##### 7. Client side

Add validation on client side with Javascript.

##### 8. UX

Work the user experience :

* Attractivity of call-to-action elements
* Interactivity
* Responsive design

##### 9. Ajax

Respond to user request with [Ajax](https://www.javatpoint.com/ajax-tutorial).


#### RESSOURCES :

* ...