<?php
/**
 * Description of DTOContainer
 *
 * @author nosoul
 */
class Container
{
    var $Status;
    var $Results;
    var $Error;
    
    function __construct($Status, $Result)
    {
        $this->Status = $Status;
        $this->Results = $Result;
    }

}

?>
