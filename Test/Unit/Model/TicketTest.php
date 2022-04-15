<?php

namespace Foggyline\Helpdesk\Test\Unit\Model;

class TicketTest extends \PHPUnit\Framework\TestCase
{
    protected $objectManager;
    protected $ticket;

    public function setUp() : void
    {
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->ticket = $this->objectManager->getObject('Foggyline\Helpdesk\Model\Ticket');
    }

    public function testGetSeveritiesOptionArray()
    {
        $this->assertNotEmpty(\Foggyline\Helpdesk\Model\Ticket::getSeveritiesOptionArray());
    }

    public function testGetStatusesOptionArray()
    {
        $this->assertNotEmpty(\Foggyline\Helpdesk\Model\Ticket::getStatusesOptionArray());
    }

    public function testGetStatusAsLabel()
    {
        $this->ticket->setStatus(\Foggyline\Helpdesk\Model\Ticket::STATUS_CLOSED);

        $this->assertEquals(
            \Foggyline\Helpdesk\Model\Ticket::$statusesOptions[\Foggyline\Helpdesk\Model\Ticket::STATUS_CLOSED],
            $this->ticket->getStatusAsLabel()
        );
    }
    public function testGetSeverityAsLabel()
    {
        $this->ticket->setSeverity(\Foggyline\Helpdesk\Model\Ticket::SEVERITY_MEDIUM);

        $this->assertEquals(
            \Foggyline\Helpdesk\Model\Ticket::$severitiesOptions[\Foggyline\Helpdesk\Model\Ticket::SEVERITY_MEDIUM],
            $this->ticket->getSeverityAsLabel()
        );
    }
}
