<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CourseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
 	public function testProjects()
    {
        $response = $this->get('/courses');     			
    }
	public function testProjectShow()
	{
		$response = $this->get('/courses/1'); 
	}
	public function testProjectEdit()
	{
		$response = $this->get('/courses/1/edit');
	}
	public function testProjectCreate()
	{
		$response = $this->get('/courses/1/create');
	}
}
