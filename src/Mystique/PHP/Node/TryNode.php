<?php
namespace Mystique\PHP\Node;

class TryNode extends DefinitionAbstract {
    function getNodeType()
    {
        return 'Try';
    }

    function compile(\Mystique\Common\Compiler\CompilerInterface $compiler) {
        $compiler->write('try');
        parent::compile($compiler);
    }
}