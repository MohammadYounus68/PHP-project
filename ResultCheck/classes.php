<?php
	
	class Makeresult {
		public $grade;
		public function result($grade) {
			if($grade <= 100 && $grade >= 80) {
				return "A+";
			}
			elseif($grade <= 79 && $grade >= 60) {
				return "A";
			}
			elseif($grade <= 59 && $grade >= 40) {
				return "B";
			}
			elseif($grade <= 39 && $grade >= 20) {
				return "C";
			}
			else {
				return "Not Result is public";
			}
		}
	}
?>