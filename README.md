#TEST DRIVEN DEVELOPMENT EXAMPLE


##INTRODUCTION

This kata is inspired by an [example](https://github.com/daylerees/test-driven-development-example) that [Dayle rees](https://twitter.com/daylerees) did it three years ago. I was digging into github looking for some TDD examples, katas, tutorials,... in PHP and i found this example as a great option to learn the fundamentals for TDD. So, i decided to remake it in a more S.O.L.I.D. way.

##WHAT IS THIS FOR

This repository is a guided example where you can learn TDD fundamentals reading and executing tests that we are going to code step by step. 

##HOW DO I READ THIS EXAMPLE

The code will be split in branches named as step-x (step-0, step-1, step-2,...) so when you finish a step you have to change to the next branch|step. I will add some explanation in this README so you have to read this readme before the code when you arrive to a new branch

##WHAT ARE WE GOING TO CODE

We are goind tou build a text parser whith this functionalities:

- Parse bold text.
- Parse an image.
- Parse a link.

##STEP 0

###Setting up the environment

We need a xUnit framework to write our test and we are coding in PHP so PHPUnit will be our xUnit tool. This is our only mandatory library dependency.

We have two separates namespaces `Hixman\Kata` placed in /src and `Hixman\Kata\Tests` placed in /tests. In the src is where we are going to code our tool classes and int tests will be our tests classes.

Lets go to the next step changing our branch to step-1

##STEP 1

###First things first

When you approach a development you have to focus on what you need, so according to our functionalities we need three different parsers lets take one (bold parser) and lets see what we need to parse a text to a bold text.

In a first review we are going to need a regular expression to find our defined pattern and then convert it to a markup syntax. But we are coding with TDD so first we are going to define our classes and code usage flow before. Check BoldParserTest.php

![alt step-1](https://cloud.githubusercontent.com/assets/1638531/21962799/a6ca62bc-db2e-11e6-8729-deb92c33fc58.png)


##STEP 2

###To the green state for the first time

At this step our tests does not pass so lets check why. We are trying to instantiate a class that it is not declared. Lets fix this, check BoldParser.php.

![alt step-1](https://cloud.githubusercontent.com/assets/1638531/21962936/7a62e198-db30-11e6-8f92-49f561108a9e.png)

##STEP 3

###To refactor or not to refactor and red again

Sometimes you dont need to refactor because of complexity of your iteration and in this case we just added a class what it is impossible to refactor.

Lets make our test suite red again adding another test case to our test class check BoldParserTest.php

![alt step-1](https://cloud.githubusercontent.com/assets/1638531/21963052/5228f3e0-db33-11e6-8a79-f658e871f88b.png)


##STEP 4

###Coding flow structures... awesome! Lets fix that red suite.

Now we are coding the flow needed to convert our pattern into markup language. Check BoldParser.php

##STEP 5

###UrlParser another test class.

We are green and our first functionality is covered. It's time to face the next functionality.
The next functionality we are going to cover is to parse an image. Lets create a test for this check ImageParserTest.php

##STEP 6

###UrlParser another class

We have created our new test for the new funcionality lets fix it declaring the new class needed check ImageParser.php

##STEP 7

###More coding flow structures

We have a new class that will wrap our new functionality but it still does not do anything lets give it some meaning. check ImageParserTest.php

##STEP 8

###Create parse method in ImageParser

Red state again and we have to fix it again. Lets create a method in ImageParser due to go to green state. Check ImageParser.php

##STEP 9

###Another iteration another functionality LinkParser
 
 We have added another functionality (image parser) covered with tests now we have to keep rolling. Check LinkParserTest.php
 
##STEP 9
 
###LinkParser creation
 
 We create a new class Link parser to go green state. Check LinkParser.php
 
