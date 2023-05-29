## SOLID principles with examples
<h3>1 - Single Responsibility </h3> 
<p>A class should do one thing and therefore it should have only a single reason to change </p>
<p>look at the storing user example : </p>
<p>Before Solid :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/a2db4451e487a00300e30f9c6ff042767934fb60/app/Http/Controllers/UserController.php#L40-L62

<p>after applying solid :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/5386d8d94785527608de3c7f9680480e662b910d/app/Http/Controllers/SolidUserController.php#L43-L59


<h3>2 - open for extension, closed for modification </h3> 
<p>we stop ourselves from modifying existing code and causing potential new bugs in an otherwise happy application.</p>
<p>look at the sending notification : </p>
<p> before solid : </p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/89b74a9bbdec351e889a2da9c1c13c6fd36417f1/app/Http/Controllers/UserController.php#L109-L126

<p> after solid : </p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/3a1d727b963b805b7207ab0845030dc2cad3793d/app/Http/Controllers/SolidUserController.php#L106-L123

https://github.com/ahmedtaha01/SolidPrinciples/blob/3a1d727b963b805b7207ab0845030dc2cad3793d/app/Interfaces/NotificationInterface.php#L3-L14

https://github.com/ahmedtaha01/SolidPrinciples/blob/89b74a9bbdec351e889a2da9c1c13c6fd36417f1/app/service/user/emailService.php#L3-L16

<h3>3 - Liskov substitution problem </h3> 
<p>The Liskov Substitution Principle (LSP) states that objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program. Violating this principle can lead to unexpected behavior and code that is difficult to maintain</p>
<p>Liskov is an extension to the open closed principle, lets see our example</p>
<p>first,the code that violates this rule : </p>
<p>lets figure out what is happening here, first we want to calculate the bonus of salary based on user rule</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/c50eb2dbc9b1568e0a65d7e937c118a43b93e6be/app/calculators/SuperadminBonusCalculator.php#L3-L20

<p> the superadmin class is the base class for other users, other users inherit from it but thats violate the principle as the principle states that a derived class instance can replace its base class without change in behavior but in our code if we replace objects, the result will be different as super admin takes 20% bonus and admin takes 10%
<p/>
<p>so the solution is using interface :</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/4e120eb7f5c889dccbaf75bd2483fd70227d8a5f/app/Interfaces/CalculateBonusInterface.php#L3-L20

https://github.com/ahmedtaha01/SolidPrinciples/blob/7a5f4d84b1f2c7cd5af9deba9c28246c77bbae1e/app/SolidCalculators/AdminBonusCalculator.php#L3-L11

https://github.com/ahmedtaha01/SolidPrinciples/blob/7a5f4d84b1f2c7cd5af9deba9c28246c77bbae1e/app/SolidCalculators/DoctorBonusCalculator.php#L3-L13

<h3>4- Interface segregation principle </h3> 
<p>The Interface Segregation Principle suggests that clients should not be forced to depend on interfaces they do not use. In other words, it promotes the idea of creating smaller, focused interfaces that are tailored to the specific needs of clients, rather than having large, bloated interfaces that cater to multiple functionalities.</p>

<p>this is the big interface the should be splitted into smaller ones</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/ReportGeneratorInterface.php#L3-L20

<p>after splitting :</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/PdfReportGeneratorInterface.php#L3-L9
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/ExcelReportGeneratorInterFace.php#L3-L9
https://github.com/ahmedtaha01/SolidPrinciples/blob/5b34671486c085dd9c4b499f065a3131fbb45a1e/app/Interfaces/CsvReportGeneratorInterface.php#L3-L9

<h3> 5 - Dependency inversion principle </h3>

* High-level modules or classes should not depend on low-level modules or classes. Both should depend on abstractions.
* Abstractions should not depend on details. Details should depend on abstractions.

https://github.com/ahmedtaha01/SolidPrinciples/blob/2d628191633bcea50ea5d3c03fe3309daf7eefb9/app/Http/Controllers/SolidUserController.php#L97-L106

https://github.com/ahmedtaha01/SolidPrinciples/blob/2d628191633bcea50ea5d3c03fe3309daf7eefb9/app/Interfaces/UserUpdateInterface.php#L3-L8

https://github.com/ahmedtaha01/SolidPrinciples/blob/2d628191633bcea50ea5d3c03fe3309daf7eefb9/app/service/user/updateService.php#L7-L12

<p>bind the implemetation of update function to the interface in AppServiceProvider</p>
https://github.com/ahmedtaha01/SolidPrinciples/blob/2d628191633bcea50ea5d3c03fe3309daf7eefb9/app/Providers/AppServiceProvider.php#L17-L20
