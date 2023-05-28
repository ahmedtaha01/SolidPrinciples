## SOLID principles with examples
<h3>1 - Single Responsibility </h3> 
<p>A class should do one thing and therefore it should have only a single reason to change </p>
<p>look at the storing user example : </p>

- [No Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/UserController.php).
- [Applying Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/SolidUserController.php).

<h3>2 - open for extension, closed for modification </h3> 
<p>we stop ourselves from modifying existing code and causing potential new bugs in an otherwise happy application.</p>
<p>look at the sending notification : </p>

- [No Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/UserController.php).
- [Applying Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/SolidUserController.php).

<h3>3 - Liskov substitution problem </h3> 
<p>The Liskov Substitution Principle (LSP) states that objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program. Violating this principle can lead to unexpected behavior and code that is difficult to maintain</p>
<p>Liskov is an extension to the open closed principle, lets see our example</p>
<p>first code that violates this rule : </p>
<p>lets figure out what is happening here, first we want to calculate the bonus of salary based on user rule</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/181657c804ddc6ecdc730f56a482a7c55988c9eb/app/calculators/SuperadminBonusCalculator.php#L3-L11

<p> the superadmin class is the base class for other users, other users inherit from it but thats violate the principle as the principle states that a derived class instance can replace its base class without change in behavior but in our code if we replace objects, the result will be different as super admin takes 20% bonus and admin takes 10%
<p/>
<p>so the solution is using interface :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/6f2a6fff604d6205671eb3c12a0cb19a0fae4622/app/Interfaces/CalculateBonusInterface.php#L3-L10
