<?php

require_once __DIR__.'/../Base.php';

use Kanboard\Model\Task;
use Kanboard\Model\TaskCreation;
use Kanboard\Model\TaskFinder;
use Kanboard\Model\Project;
use Kanboard\Model\Category;
use Kanboard\Model\User;

class CategoryTest extends Base
{
    public function testCreation()
    {
        $tc = new TaskCreation($this->container);
        $tf = new TaskFinder($this->container);
        $p = new Project($this->container);
        $c = new Category($this->container);

        $this->assertEquals(1, $p->create(array('name' => 'Project #1')));
        $this->assertEquals(1, $c->create(array('name' => 'Category #1', 'project_id' => 1)));
        $this->assertEquals(2, $c->create(array('name' => 'Category #2', 'project_id' => 1)));
        $this->assertEquals(1, $tc->create(array('title' => 'Task #1', 'project_id' => 1, 'category_id' => 2)));

        $task = $tf->getById(1);
        $this->assertTrue(is_array($task));
        $this->assertEquals(2, $task['category_id']);

        $category = $c->getById(2);
        $this->assertTrue(is_array($category));
        $this->assertEquals(2, $category['id']);
        $this->assertEquals('Category #2', $category['name']);
        $this->assertEquals(1, $category['project_id']);

        $this->assertEquals(2, $c->getIdByName(1, 'Category #2'));
        $this->assertEquals(0, $c->getIdByName(2, 'Category #2'));

        $this->assertEquals('Category #2', $c->getNameById(2));
        $this->assertEquals('', $c->getNameById(23));
    }

    public function testRemove()
    {
        $tc = new TaskCreation($this->container);
        $tf = new TaskFinder($this->container);
        $p = new Project($this->container);
        $c = new Category($this->container);

        $this->assertEquals(1, $p->create(array('name' => 'Project #1')));
        $this->assertEquals(1, $c->create(array('name' => 'Category #1', 'project_id' => 1)));
        $this->assertEquals(2, $c->create(array('name' => 'Category #2', 'project_id' => 1)));
        $this->assertEquals(1, $tc->create(array('title' => 'Task #1', 'project_id' => 1, 'category_id' => 2)));

        $task = $tf->getById(1);
        $this->assertTrue(is_array($task));
        $this->assertEquals(2, $task['category_id']);

        $this->assertTrue($c->remove(1));
        $this->assertTrue($c->remove(2));

        // Make sure tasks assigned with that category are reseted
        $task = $tf->getById(1);
        $this->assertTrue(is_array($task));
        $this->assertEquals(0, $task['category_id']);
    }
}
