<?php

namespace Basilicom\ERDiagramXMLExportBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class ERDiagramXMLExportBundle extends AbstractPimcoreBundle
{
    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return 'Provides an YED Compliant XML Representation of the Pimcore Class Structure';
    }
}