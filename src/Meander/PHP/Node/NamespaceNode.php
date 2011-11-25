<?php

namespace Meander\PHP\Node;

class NamespaceNode extends \Meander\PHP\Node\DefDeclNodeAbstract
{
    function setDeclaration()
    {
        $this->children[0] = new NamespaceDeclaration(null);
    }
    

    function setDefinition(NodeList $definition)
    {
        $this->children[1] = new NamespaceDefinition($definition);
    }


    function getNodeType()
    {
        return 'Namespace';
    }
}