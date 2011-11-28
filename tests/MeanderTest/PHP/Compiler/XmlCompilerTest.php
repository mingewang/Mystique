<?php

namespace MeanderTest\PHP\Compiler;
use \Meander\PHP\Compiler\XmlCompiler;

use PHPUnit_Framework_TestCase;

class XmlCompilerTest extends PHPUnit_Framework_TestCase {
    function testCompilation() {
        $compiler = new XmlCompiler();
        $walker = new \Meander\PHP\Node\Traverser($compiler);
        $walker->traverse(new \Meander\PHP\Node\BinaryExpression(new \Meander\PHP\Node\Variable('a'), new \Meander\PHP\Token\Operator('='), new \Meander\PHP\Node\Value(10, \Meander\PHP\Node\Value::T_INTEGER)));

        $this->assertXmlStringEqualsXmlString(
            '<ast><binary-expression><variable>a</variable><operator>=</operator><integer>10</integer></binary-expression></ast>',
            (string) $compiler
        );
    }
}