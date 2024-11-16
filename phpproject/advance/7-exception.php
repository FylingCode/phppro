<?php
function divide($divident,$divisor){
    if($divisor == 0){
        throw new Exception("divisor is zero");
    }
    return $divident / $divisor;
}

try{
    echo divide(5,0);
}catch(Exception $e){
     echo "unable to divide <br>";
}finally{
    echo "processs complete <br>";
}



// Method	            Description
// getMessage()	    Returns a string describing why the exception was thrown
// getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
// getCode()	    Returns the exception code
// getFile()	    the full path of the file in which the exception was thrown
// getLine()	    Returns the line number of the line of code which threw the exception

function dividee($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
  }
  
  try {
    echo dividee(5, 0);
  } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
  }
  
?>