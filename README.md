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
 
##STEP 10
 
###LinkParser creation
 
 We create a new class Link parser to go green state. Check LinkParser.php
 
##STEP 11

###Test for parser method in LinkParser

 Lets break our test suite again to add another one method to our new class LinkParser. Check LinkParserTest.php.

##STEP 12

###Create parse method in LinkParser

Red state again and we have to fix it again. Lets create a method in LinkParser due to go to green state. Check LinkParser.php

##STEP 13

###Ok, all functionalities covered, refactor time

At this point we have all type of parser covered with tests, so now its time to make a good refactor. 

We can see that all classes have a commom method `parse($text)` and the same workflow. This information let us know that we can extract that method to a common abstract class. 

check AbstractParser.php, LinkParser.php, ImageParser.php, BoldParser.php

##STEP 14

###Lets abstract parse method to an interface.

We have a common class that wraps our common method but we want to expose a public api for all of this parser classes so we should extract this method to an interface.
 
First add to all tests an interface assertion. check BoldParserTest.php, ImageParserTest.php, LinkParserTest.php

![alt step-14](https://cloud.githubusercontent.com/assets/1638531/21964867/4855ad1a-db54-11e6-8f8b-7968ca283314.png)

##STEP 15

###All parsers implement ParserInterface

We are red now lets make all parsers implement our ParserInterface. check ParserInterface, LinkParser.php, ImageParser.php, BoldParser.php 

And once again execute your test suite. GREEN!

![alt step-14](https://cloud.githubusercontent.com/assets/1638531/21964938/afbcbdda-db55-11e6-85bb-522b4c38aca4.png)


##STEP 16

###Parser must work together

Ok, we have a bunch of awesome parsers but they have to be sticked together because they must be executed sequentially for the same text. Lets create a ParserRunner to run a few parser against the same text. Check ParserRunnerTest.php

##STEP 17

###Implementing ParserRunner

Acording to our test suite we need a new class called ParserRunner. Lets create it. check ParserRunner.php

##STEP 18

###Parse them all

We are going to create a test to attach parsers to parser runner and then parse all parsers attached to parser runner. check ParserRunnerTest.php

##STEP 19

###Implementing parser runner

Ok, now we have our test suite in red state because we need to implement our new methods in ParserRunner.php, check ParserRunner.php

##STEP 20

###Fixing and Refactoring test cases

We have checked that our test cases didnt work as expected when the string given is more complicated. We need to fix this to ensure that our test cases are testing what we want to test. Lets fix it. check ImageParserTest.php, LinkParserTest and BaseTest.php


##REVIEW

This is the resulting UML diagram:

![uml](https://cloud.githubusercontent.com/assets/1638531/21966126/00c53640-db6e-11e6-8aba-4475abc9e87f.png)


Thats all!

Feel free to open an issue to give me some feedback or contact me in [twitter](https://twitter.com/hixman88).

Sorry for my english, it's not really good.
 
 i hope you liked it.

And keep your tests suite always green!

![alt step-14](https://cloud.githubusercontent.com/assets/1638531/21965783/11560b62-db67-11e6-8013-c67961c04d77.png)
