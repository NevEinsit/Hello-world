<div class="objects container content">
  <h3>Objects</h3>
  <?php
    //Sub-Task 1
    interface Employee{
      public function displayEmployeeInfo();
    }

    //Sub-Task 2
    class Management implements Employee{
      protected $sin;
      protected $age;
      protected $salary;

      function __construct($sin, $age, $salary){
        $this->sin = $sin;
        $this->age = $age;
        $this->salary = $salary;
      }

      public function displayEmployeeInfo(){
        echo "<p><b>SIN</b>: ".$this->sin.", <b>Age</b>: ".$this->age.", <b>Salary</b>: ".$this->salary;
      }
    }

    //Sub-Task 3
    class Manager extends Management{
      private $adminLevel;

      function __construct($sin, $age, $salary, $adminLevel){
        parent::__construct($sin, $age, $salary);
        $this->adminLevel = $adminLevel;
      }

      public function displayEmployeeInfo(){
        parent::displayEmployeeInfo();
        echo ", <b>Admin Level</b>: ".$this->adminLevel."</p>";
      }
    }

    //Sub-Task 4
    class Development implements Employee{
      protected $sin;
      protected $age;
      protected $salary;

      function __construct($sin, $age, $salary){
        $this->sin = $sin;
        $this->age = $age;
        $this->salary = $salary;
      }

      public function displayEmployeeInfo(){
        echo "<p><b>SIN</b>: ".$this->sin.", <b>Age</b>: ".$this->age.", <b>Salary</b>: ".$this->salary;
      }
    }

    //Sub-Task 5
    class ITSpecialist extends Development{
      private $projectAssigned;

      function __construct($sin, $age, $salary, $projectAssigned){
        parent::__construct($sin, $age, $salary);
        $this->projectAssigned = $projectAssigned;
      }

      public function displayEmployeeInfo(){
        parent::displayEmployeeInfo();
        echo ", <b>Assigned Project</b>: ".$this->projectAssigned."</p>";
      }
    }
   ?>

  <div class="subtask">
    <h4>Sub-Task 6</h4>
    <div class="subtask-container">
      <p><?php
            $manager1 = new Manager(123456789, 45, 110000, "MG-06");
            $manager2 = new Manager(987654321, 55, 120000, "MG-07");
            echo "<h4><u>Manager</u></h4>";
            $manager1->displayEmployeeInfo();
            $manager2->displayEmployeeInfo();
       ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 7</h4>
    <div class="subtask-container">
      <p><?php
            $ITSpecialist1 = new ITSpecialist(567451234, 35, 100000, "T1SR");
            $ITSpecialist2 = new ITSpecialist(234451234, 30, 90000, "HIMS");
            echo "<h4><u>IT Specialist</u></h4>";
            $ITSpecialist1->displayEmployeeInfo();
            $ITSpecialist2->displayEmployeeInfo();
       ?>
      </p>
    </div>
  </div>

</div>
