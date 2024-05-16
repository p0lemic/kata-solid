## SOLID Principles

### Single Responsibility Principle (SRP)
The SRP states that a class should have only one reason to change. In other words, a class should have only one responsibility.

- Responsibility = Reason to change

- If nothing ever changed: no problem

```
ExpensesReport Kata
https://github.com/christianhujer/expensereport/tree/trunk/expensereport-php
```

### Open/Closed Principle (OCP)
The OCP suggests that a class should be open for extension but closed for modification. This means that you can add new functionality without altering existing code.

- When facing change: Introduce abstractions.

- Abstraction = Interface

```
FizzBuzz
https://github.com/meialbiol/kata-fizz-buzz
```

### Liskov Substitution Principle (LSP)
The LSP states that objects of a superclass should be able to replace objects of a subclass without affecting the correctness of the program.

- Polymorphism must be transparent to clients
- The client must not care which implementation is used
- instanceof is a smell: broken abstraction

```
Gilded Rose
https://github.com/emilybache/GildedRose-Refactoring-Kata/tree/main/php
```

### Interface Segregation Principle (ISP)
The ISP recommends that a class should not be forced to implement interfaces it does not use. It promotes the creation of smaller, more specific interfaces.

- Do not depend on more than you need
- Keep your interfaces slim
- Extract interface from dependency if you only use some of the methods


### Dependency Inversion Principle (DIP)
The DIP emphasizes that high-level modules should not depend on low-level modules, but both should depend on abstractions. It also introduces the concept that abstractions should not depend on details, but details should depend on abstractions.

- Do not depend on low level details
- Depend on high level abstractions instead
- Business rules (High level) should not change when implementation details (Low level) change
- i.e: Report calculation has to change when data storage changes? 

```
https://github.com/wataridori/solid-php-example
https://github.com/DanielHe4rt/SOLID4Noobs/blob/main/en/README.MD
```

### Katas:
```
https://github.com/emilybache/Racing-Car-Katas/tree/main/php
```

## Tell! Don't ask!
Rules:
- No return values
- No side effects changing “global variables”
- Don’t use exceptions as return values

```
https://kata-log.rocks/tell-dont-ask-kata
https://github.com/racingDeveloper/tell-dont-ask-kata/tree/master/php
```

## YAGNI
YAGNI is a principle of eXtreme Programming. YAGNI is an acronym for You Aren’t Gonna Need It.

Implement things when you actually need them, never when you just foresee that you need them.

The main goal of the YAGNI principle is to avoid spending time and money on overengineering things that you think you will need later on. Because in the end, it usually turns out that you don’t need it, or that what you need is different from what you expected.

The primary benefit of using YAGNI is a more cost-optimized product development process due to:

- Better developer performance: The team focuses on delivering the current requirements effectively. They don’t spend time and effort on guesses.
- More flexible codebase: You don’t have to find ways to use suboptimal solutions that you had already developed before you had the full picture.

## KISS
According to the keep it simple, stupid principle the key to building a successful product is simplicity. The KISS method applies to the design and development of digital products.

- Users don’t want to waste time. They expect a frictionless experience with straightforward, intuitive user flows, jargon-free naming, and quick results.
- A simpler software structure makes testing, including also automated testing, easier and more effective.
- Reduced codebase complexity makes maintenance and onboarding of new team members mid-project easier and faster.

## DRY
DRY stands for don’t repeat yourself and recommends reducing the repetition of software patterns. 
By eliminating redundancies in process and logic, engineers lower technical debt and improve the maintainability of the code - both of which are important cost factors, especially in the long term. 
What’s important, DRY should be applied across the whole system, including not only in the codebase but also in testing and documentation.

## Execute phpunit
You can execute phpunit directly with your local dependencies
```
vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```
or you can use Docker using this bash script 
```
./test.sh
```
