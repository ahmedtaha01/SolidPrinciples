## SOLID principles with examples
<h3>1 - Single Responsibility </h3> 
<p>A class should do one thing and therefore it should have only a single reason to change </p>
<p>look at the storing user example : </p>

- [No Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/UserController.php).
- [Applying Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/SolidUserController.php).

<h3>1 - open for extension, closed for modification </h3> 
<p>we stop ourselves from modifying existing code and causing potential new bugs in an otherwise happy application.</p>
<p>look at the sending notification : </p>

- [No Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/UserController.php).
- [Applying Solid](https://github.com/ahmedtaha01/SolidPrinciples/blob/master/app/Http/Controllers/SolidUserController.php).

<p>the interface which the logic centered on:</p>

https://github.com/ahmedtaha01/SolidPrinciples/blob/712066735f17bd089824d5003836aff66b95d5f3/app/Interfaces/NotificationInterface.php#LL3C1-L15C1


