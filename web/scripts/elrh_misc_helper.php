<?php
///////////////////////////////////////////////////////////////////////
//                                                                   //
//                           Alois-Seckar.cz                         //
//                          Personal homepage                        //
//                                                                   //
//                 Copyright © Alois Seckar 2008-2015                //
//                                                                   //
//                                                                   //
//    Page Info                                                      //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
// *  Author:         *  Alois Seckar [ seckar@svobodni.cz ]       * //
// *  Homepage:       *  http://alois-seckar.cz                    * //
// *  File:           *  /web/scripts/elrh_misc_helper.php         * //
// *  Purpose:        *  Bunch of little static helping methods    * //
// *  System Version: *  3.0                                       * //
// *  Last Modified:  *  2015-12-06 17:35 GMT+1                    * //
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
///////////////////////////////////////////////////////////////////////


class ELRHMiscHelper {
	/** Checks if source variable (typically from super array) has value defined.
	 * If yes - returns this value, if no - returns given default value. Protects
	 * from errors occurend when handling undefined variable, typically from 
	 * superarrays $_GET or $_POST.
	 *  
	 * @param identifier $source Checked source variable
	 * @param mixed $def_value Given default vaule for target 
	 * 
	 * @return Either defined value of $source variable or given $def_value
	 */
	public static function elrhTestAndAssignVariable($source,$def_value) {
		if (!empty($source)) {
			return $source;
		} else {
			return $def_value;
		}
	} 
	
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
