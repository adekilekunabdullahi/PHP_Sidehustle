<?php
function validate_voter($age, $has_PVC, $ward){
	if ($age < 18){
		$has_PVC = false;
		}
	if ($age >=18 && $has_PVC == true && $ward == 020){
		echo "Voter eligible to vote";
		}
	elseif ($age < 18){
		echo "Not Eligible: your age must be 18 or greater to vote";
		}
	elseif ($has_PVC == false){
		echo "Not Eligible: you must have pvc to vote";
		}
	elseif ($ward != 020){
		echo "Not Eligible: you must belong to ward 020 to vote";
		}
	else{
		echo "you are not eligible to vote";
		}
}
?>
