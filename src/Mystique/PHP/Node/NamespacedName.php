<?php
namespace Mystique\PHP\Node;
use Mystique\Common\Ast\Node\BranchAbstract;

class NamespacedName extends BranchAbstract {
    function __construct($namespace, $name) {
        parent::__construct();
        $this->children[0] = new NamespaceName($namespace);
        $this->children[1] = new Name($name);
    }
}