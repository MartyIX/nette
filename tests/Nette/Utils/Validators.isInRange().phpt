<?php

/**
 * Test: Nette\Utils\Validators::isInRange()
 *
 * @author     David Grudl
 * @package    Nette\Utils
 * @subpackage UnitTests
 */

use Nette\Utils\Validators;



require __DIR__ . '/../bootstrap.php';



Assert::true( Validators::isInRange(1, array(0,2)) );
Assert::true( Validators::isInRange(-1, array(-1,1)) );
Assert::true( Validators::isInRange(1, array(-1,1)) );
Assert::true( Validators::isInRange(0.1, array(-0.5,0.5)) );
Assert::true( Validators::isInRange(0, array(-1)) ); /* Only minimum specified */
Assert::true( Validators::isInRange(0, array(1 => 1)) ); /* Only maximum specified */
Assert::false( Validators::isInRange(-1, array(0)) ); /* Only minimum specified */
Assert::false( Validators::isInRange(0, array(1 => -1)) ); /* Only maximum specified */
Assert::false( Validators::isInRange(2, array(-1,1)) );
Assert::false( Validators::isInRange(2.5, array(-1,1)) );
