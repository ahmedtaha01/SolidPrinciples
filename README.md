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
<p>first,the code that violates this rule : </p>
<p>lets figure out what is happening here, first we want to calculate the bonus of salary based on user rule</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/181657c804ddc6ecdc730f56a482a7c55988c9eb/app/calculators/SuperadminBonusCalculator.php#L3-L11

<p> the superadmin class is the base class for other users, other users inherit from it but thats violate the principle as the principle states that a derived class instance can replace its base class without change in behavior but in our code if we replace objects, the result will be different as super admin takes 20% bonus and admin takes 10%
<p/>
<p>so the solution is using interface :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/6f2a6fff604d6205671eb3c12a0cb19a0fae4622/app/Interfaces/CalculateBonusInterface.php#L3-L10
<p>now every user has its implementation of the calculate function, we can replace the base class object with the derived class object without any error</p>

<h3>4- Interface segregation principle </h3> 
<p>The Interface Segregation Principle suggests that clients should not be forced to depend on interfaces they do not use. In other words, it promotes the idea of creating smaller, focused interfaces that are tailored to the specific needs of clients, rather than having large, bloated interfaces that cater to multiple functionalities.</p>

<p>this is the big interface the should be splitted into smaller ones</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/ReportGeneratorInterface.php#L3-L20

<p>after splitting :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/PdfReportGeneratorInterface.php#L3-L9
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/ExcelReportGeneratorInterFace.php#L3-L9
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/CsvReportGeneratorInterface.php#L3-L9
