<?php
class ELRHMiscHelper {	
	/** Specific function for returning current age in years. 
	 *  
	 * @param String $birth Birthdate in YYYY-MM-DD format
	 * 
	 * @return int Current age in years
	 */
	public static function elrhCountAge($birth) {
		// split given birth date
		$date_then = Split("-",$birth);
		// get and split current birth date
		$date = Date("Y-m-d");
		$date_now = Split("-",$date);
		// counting process
		// this statement is always correct
		$age = ($date_now[0]-1)-$date_then[0]; 
		// now only look, if not to add one more year (birthday already passed this year)
		if (($date_now[1]>$date_then[1])||(($date_now[1]==$date_then[1])&&($date_now[2]>=$date_then[2]))) {
			$age++;
		}
		//
		return $age;
	}
}
?>
