<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Type Hinting</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php # Script 6.8 - hinting.php
        //This page defines and uses the department and employee classes.
        
        #***** CLASSES *****#
        
        /* Class Department
         * The class contains two attribute: name and employees[].
         * The class contains two methods:
         * - __ construct()
         * - addEmployee()
         */
        
        class Department {
            private $_name;
            private $_employees;
            function __construct($name) {
                $this->_name = $name;
                $this->_employees = array();
                echo "<p>New deparment is created: $name.</p>";
            }
            function addEmployee(Employee $e) {
                $this->_employees[] = $e;
                echo "<p>{$e->getName()} has been added to the {$this->_name} deparment.</p>";
            }
        } // End of class Department
        
        /* Class Employee
         * The class contains one attribute: name.
         * The class contains two methods:
         * - construct()
         * - getName()
         */
        class Employee {
            private $_name;
            function __construct($name) {
                $this->_name = $name;
            }
            function getName() {
                return $this->_name;
            }
        } // End of Employee class
        #***** END OF CLASSES *****#
        
        // Create a department:
        $hr = new Department('Human Recources');
        $hr2 = new Department('Development');
        
        // Create empolyee
        $e1 = new Employee('Jane Doe');
        $e2 = new Employee('John Doe');
        $e3 = new Employee('Dalibor Vlatković');
        
        
        // Add empoyees to the department
        $hr->addEmployee($e1);
        $hr->addEmployee($e2);
        $hr2->addEmployee($e3);
        
        // Delete the objects:
        unset($hr, $hr2, $e1, $e2);
        ?>
    </body>
</html>