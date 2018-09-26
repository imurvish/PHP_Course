<center> <b style="font-size: 18px;">Part - 8</b></center><hr/>

<!-- Which Day Is Today.? -->
	<center> <small> <i>
		<?php
			$today = date("D");
			switch($today)
			{
		    case "Mon":
		        echo "Today is Monday. Clean your house.";
		        break;
		    case "Tue":
		        echo "Today is Tuesday. Buy some food.";
		        break;
		    case "Wed":
		        echo "Today is Wednesday. Visit a doctor.";
		        break;
		    case "Thu":
		        echo "Today is Thursday. Repair your car.";
		        break;
		    case "Fri":
		        echo "Today is Friday. Party tonight.";
		        break;
		    case "Sat":
		        echo "Today is Saturday. Its movie time.";
		        break;
		    case "Sun":
		        echo "Today is Sunday. Do some rest.";
		        break;
		    default:
		        echo "No information available for that day.";
		        break;
			}
		?> </i> </small>
	</center> <hr/>
<!-- Which Day Is Today.? -->

// PHP Frameworks

// Zend 3
	autoloading PSR-0
	By default use PDO

// Symfony 3
// Codeigniter 3
// CakePHP 3
// Yii 2
// Laravel 5

Difference
-> Code Style and Philosophy
	1. zend
		losle coupled
	2. Symfony
		speed up creation
	3. Codeigniter
		simple and powerful
	4. CakePHP
		simpler and faster with less code
	5. Yii
		high performance
		borrow frommprado
	6. Laravel
		borrow from ruby on rails, node.js

-> Team Size
	yii and zend are designed for enterprize

-> Database Compatibility
	zend: mysql
	Symfony: mysql, oracle, mongodb
	Codeigniter: mysql, ms sql, oracle
	CakePHP: mysql, ms sql, oracle
	yii: mysql, maria db, mongodb
	Laravel: mysql, ms sql, redis

