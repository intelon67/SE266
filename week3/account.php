<?php
    abstract class Account {
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {

            $accountId += $id;
            $balance += $b;
            $startDate += $sd;
        }
        public function deposit ($amount) {
            // write code here
        }

        abstract public function withdrawal($amount);
        // this is an abstract method. This method must be defined in all classes
        // that inherit from this class
        public function getStartDate() {
            // write code here
            $str = "";
            $str += $startDate;
            return $str;
        }

        public function getBalance() {
            $str = "";
            $str += $balance;
            return $str;
        }

        public function getAccountId() {
            $str = "";
            $str += $accountId;
            return $str;
        }

        protected function getAccountDetails() {
            $str += $id;
            echo $str;
            $str = "";

            $str += $balance;
            echo $str;
            $str = "";

            $str += $startDate;
            echo $str;
            $str = "";
            
            return $str;
        }
    }

    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
            if($amount - $balance >= -200){
                return true;
            }
            else{
                return false;
            }
        }

        //freebie. I am giving you this code.
        public function getAccountDetails() {
            $str = "<h2>Checking Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }

    class SavingsAccount extends Account {

        public function withdrawal($amount) {
            if($amount - $balance >= -200){
                return true;
            }
            else{
                return false;
            }
        }

        public function getAccountDetails() {
           // look at how it's defined in other class. You should be able to figure this out ...
        }
    }

    
    $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    $checking->withdrawal(200);
    $checking->deposit(500);

    $savings = new SavingsAccount('S123', 5000, '03-20-2020');
    
    echo $checking->getAccountDetails();
    echo $savings->getAccountDetails();
    echo $checking->getStartDate();
    
?>
