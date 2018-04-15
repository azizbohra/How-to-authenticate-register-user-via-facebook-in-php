# How to authenticate register user via facebook in php

You have often seen this option in many websites or mobile application. so why this option is getting popularity & what are the benefits of giving this option to user. In this article i will show you what are the benefits of it & how to authenticate/register user via facebook in php.

Nowadays everybody has facebook account. when you register with facebook you have to fill all the details. Now facebook has all the information about you. facebook provide us an auth protocol by which we can access user information.  

Nobody want to enter whole information again & again in different websites. The best way is to use facebook auth protocol by which user can login & give you all his basic information.

It is good for developer & as well as user also. Because user does not want to remember credential for every website he register with, he just want to remember his facebook credentials. so, this is the best way to login or register via facebook.

To implement this feature in your website you need 4 things:
1. Facebook Graph SDK
2. APP_ID
3. APP_SECRET
4. REDIRECT_URL

You have to generate APP_ID & APP_SECRET in facebook developer panel.
You have to configure redirect url in facebook developer panel

Note: Don't forget to replace APP_ID and APP_SECRET in config.php
