<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require("core/init.php");
$GLOBALS["config"]["logger"]["engine"] = new TestsLogger(); // Logger produce no output

require("classes/DB_Manager.php");

final class DB_ManagerTest extends TestCase
{
    public function testShouldReturnInstanceOfDBManager(): void
    {
        $db_manager_instance = DB_Manager::getInstance();
        $this->assertInstanceOf("DB_Manager", $db_manager_instance);
    }

    public function testShouldBeTheSameInstance(): void
    {
        $db_manager_instance1 = DB_Manager::getInstance();
        $db_manager_instance2 = DB_Manager::getInstance();

        $this->assertSame($db_manager_instance1, $db_manager_instance2);
        $this->assertEquals($db_manager_instance1, $db_manager_instance2);
    }

}

?>