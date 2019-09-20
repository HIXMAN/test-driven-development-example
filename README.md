# TEST DRIVEN DEVELOPMENT EXAMPLE


## INTRODUCTION

This kata is inspired by an [example](https://github.com/daylerees/test-driven-development-example) that [Dayle rees](https://twitter.com/daylerees) did it three years ago. I was digging into github looking for some TDD examples, katas, tutorials,... in PHP and i found this example as a great option to learn the fundamentals for TDD. So, i decided to remake it in a more S.O.L.I.D. way.

## WHAT IS THIS FOR

This repository is a guided example where you can learn TDD fundamentals reading and executing tests that we are going to code step by step. 

## HOW DO I READ THIS EXAMPLE

The code will be split in branches named as step-x (step-0, step-1, step-2,...) so when you finish a step you have to change to the next branch|step. I will add some explanation in this README so you have to read this readme before the code when you arrive to a new branch

## WHAT ARE WE GOING TO CODE

We are goind tou build a text parser whith this functionalities:

- Parse bold text.
- Parse an image.
- Parse a link.

## STEP 0

### Setting up the environment

We need a xUnit framework to write our test and we are coding in PHP so PHPUnit will be our xUnit tool. This is our only mandatory library dependency.

We have two separates namespaces `Hixman\Kata` placed in /src and `Hixman\Kata\Tests` placed in /tests. In the src is where we are going to code our tool classes and int tests will be our tests classes.

Lets go to the next step changing our branch to step-1



